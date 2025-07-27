<?php

namespace QuadPBX\Components\Interfaces;

use Exception;

abstract class EtcAsteriskFile
{
    /**
     * The contents of the source template file, if any
     *
     * @var array
     */
    protected array $srctemplate = [];

    /**
     * Sections of the file. '__default__' is no section. This
     * returns template sections, too
     *
     * @var array
     */
    protected array $sections = [];

    /**
     * Sections that are templates - They have (!) on the
     * end of the name.
     *
     * @var array
     */
    protected array $templates = [];

    /**
     * Current pending output of the file.
     *
     * @var array
     */
    protected array $output = [];

    protected string $srcfilename = '';

    /**
     * Provide the path to a template file to use as the source (optional)
     *
     * @param string $srcfile File path to the template
     *
     * @return void
     * @throws Exception
     */
    public function __construct(string $srcfile = "")
    {
        if ($srcfile) {
            if (strpos($srcfile, '/') === false) {
                $srcfile = __DIR__ . '/../EtcAsterisk/templates/' . $srcfile;
            }
            if (!file_exists($srcfile)) {
                throw new \Exception("Template file does not exist: $srcfile");
            }
            $this->srcfilename = $srcfile;
            $this->srctemplate = file($srcfile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $this->parseSrcTemplate();
        } else {
            // Always create a default section
            $this->createSection('__default__');
        }
    }

    /**
     * Parse the source template file and populate sections.
     * This will create sections based on the template format.
     *
     * @throws Exception If the template format is invalid
     * @return void
     */
    protected function parseSrcTemplate(): void
    {
        // Always create __default__ section
        $currentSection = '__default__';
        $this->createSection($currentSection);

        foreach ($this->srctemplate as $line) {
            if (preg_match('/^\[([^]]+)\](\([^)]\))?/', $line, $matches)) {
                $currentSection = trim($matches[1]);
                $options = $matches[2] ?? '';
                $this->createSection($currentSection, $options);
                // Magic for asterisk.conf
                if (basename($this->srcfilename) === 'asterisk.conf') {
                    $this->setSectionDelim($currentSection, '=>');
                }
                continue;
            }
            $chunks = explode(' ', $line, 3);
            if (empty($chunks[2])) {
                throw new \Exception("Unknown line format in template: $line");
            }
            $row = explode(';', $chunks[2], 2);
            $comment = trim($row[1] ?? null);
            $this->addToSection($currentSection, trim($chunks[0]), trim($row[0]), $comment);
        }
    }

    /**
     * Add a key-value pair to an existing section. Note this will
     * not overwrite existing keys, and will throw an exception
     *
     * @param string      $sectionName Eg 'default'
     * @param string      $key         Eg 'username'
     * @param string      $value       Eg 'admin'
     * @param string|null $comment     Optional comment for the key-value pair
     *
     * @throws Exception If the section does not exist or if the key already exists
     * @return void
     */
    public function addToSection(string $sectionName, string $key, string $value, ?string $comment = null): void
    {
        if (!isset($this->sections[$sectionName])) {
            throw new Exception("Section '$sectionName' does not exist.");
        }
        if (isset($this->sections[$sectionName]['content'][$key])) {
            throw new Exception("Key '$key' already exists in section '$sectionName'.");
        }
        $this->sections[$sectionName]['content'][$key] = ["value" => $value, "comment" => $comment];
    }

    /**
     * Create a new section with the given name and optional parameter.
     * If the section already exists, it will throw an exception.
     *
     * @param string $sectionName Name of the section to create
     * @param string $param       Extra param - ie, '(!)' for templates
     *
     * @throws Exception If the section already exists
     * @return void
     */
    public function createSection(string $sectionName, string $param = ''): void
    {
        if (isset($this->sections[$sectionName])) {
            throw new Exception("Section '$sectionName' already exists.");
        }
        $this->sections[$sectionName] = ['param' => $param, 'delim' => '=', 'content' => []];
    }

    /**
     * Set the delimiter for a section. This is useful for templates
     * where the delimiter might be different (like '=>' in asterisk.conf)
     *
     * @param string $sectionName Name of the section to set the delimiter for
     * @param string $delim       The delimiter to set
     *
     * @throws Exception If the section does not exist
     * @return void
     */
    public function setSectionDelim(string $sectionName, string $delim): void
    {
        if (!isset($this->sections[$sectionName])) {
            throw new Exception("Section '$sectionName' does not exist.");
        }
        $this->sections[$sectionName]['delim'] = $delim;
    }

    /**
     * Get all sections currently defined. Note that __default__
     * is magic and will always be present.
     *
     * @return array
     */
    public function getSections(): array
    {
        return array_keys($this->sections);
    }

    /**
     * Parse a section into a string format. This is used to generate
     * the output for each section.
     *
     * @param array $section The section to parse
     *
     * @return string The parsed section as a string
     */
    protected function parseSection(array $section): string
    {
        $str = '';

        $delim = $section['delim'];
        foreach ($section['content'] as $key => $row) {
            $str .= "$key $delim " . $row['value'];
            if ($row['comment']) {
                $str .= " ; " . $row['comment'];
            }
            $str .= "\n";
        }
        return $str;
    }

    /**
     * Generate the output for the entire file. This will include
     * the default section and all other sections.
     *
     * @return string The complete output as a string
     */
    public function generateOutput(): string
    {
        // First, check if the __default__ section has anything in it
        $def = $this->sections['__default__'];
        $str = $this->parseSection($def);

        if ($str) {
            // There was something in default, add a blank line
            $str .= "\n";
        }

        // Now, process all other sections
        foreach ($this->sections as $sectionName => $section) {
            if ($sectionName === '__default__') {
                continue; // Skip the default section here, it's already processed
            }
            $str .= "[$sectionName]" . $section['param'] . "\n";
            $str .= $this->parseSection($section);
            $str .= "\n";
        }
        return $str;
    }

    /**
     * Delete a setting from a section. If the section or key does not
     * exist, it will throw an exception unless $throw is false. This
     * is to make it easier where delete may be called several times.
     *
     * @param string $sectionName Name of the section to delete from
     * @param string $key         Key to delete
     * @param bool   $throw       Whether to throw an exception if the section/key does not exist
     *
     * @throws Exception If the section or key does not exist and $throw is true
     * @return void
     */
    public function deleteSetting(string $sectionName, string $key, bool $throw = true): void
    {
        if (!isset($this->sections[$sectionName])) {
            if ($throw) {
                throw new Exception("Section '$sectionName' does not exist.");
            }
            return;
        }
        if (!isset($this->sections[$sectionName]['content'][$key])) {
            if ($throw) {
                throw new Exception("Key '$key' does not exist in section '$sectionName'.");
            }
            return;
        }
        unset($this->sections[$sectionName]['content'][$key]);
    }

    /**
     * Update a setting in a section. If the section or key does not
     * exist, it will throw an exception.
     *
     * @param string      $sectionName Name of the section to update
     * @param string      $key         Key to update
     * @param string|null $value       New value for the key, or null to keep current value
     * @param string|null $comment     New comment for the key, or null to keep current comment
     *
     * @throws Exception If the section or key does not exist
     * @return void
     */
    public function updateSetting(string $sectionName, string $key, ?string $value = null, ?string $comment = null): void
    {
        if (!isset($this->sections[$sectionName])) {
            throw new Exception("Section '$sectionName' does not exist.");
        }
        if (!isset($this->sections[$sectionName]['content'][$key])) {
            throw new Exception("Key '$key' does not exist in section '$sectionName'.");
        }
        if ($value) {
            $this->sections[$sectionName]['content'][$key]['value'] = $value;
        }
        if ($comment) {
            $this->sections[$sectionName]['content'][$key]['comment'] = $comment;
        }
    }
}
