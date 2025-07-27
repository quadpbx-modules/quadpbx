<?php

namespace QuadPBX\Components\EtcAsterisk;

use Exception;
use QuadPBX\Components\EtcAsterisk\Files\Generic;
use QuadPBX\Components\EtcAsterisk\Files\ResConfSqlite3;
use QuadPBX\Components\EtcAsterisk\Files\LoggerConf;
use QuadPBX\Components\Interfaces\WriterInterface;
use QuadPBX\Components\Writers\Generic as GenericWriter;

class EtcAsterisk
{
    protected array $srcfiles = [
        'asterisk.conf' => ["class" => Generic::class],
        'extconfig.conf' => ["class" => Generic::class],
        'logger.conf' => ["class" => LoggerConf::class],
        'modules.conf' => ["class" => Generic::class, "allowdupes" => true],
        'res_config_sqlite3.conf' => [ "class" => ResConfSqlite3::class],
    ];

    protected array $objects = [];

    /**
     * Build the configuration writers
     *
     * @return void
     */
    public function __construct()
    {
        foreach ($this->srcfiles as $file => $settings) {
            print "Processing file: $file\n";
            $allowdupes = $settings['allowdupes'] ?? false;
            $c = new $settings['class']($file, $allowdupes);
            $destfile = $settings['destfile'] ?? '/etc/asterisk/' . $file;
            $writer = new GenericWriter($c, $destfile);
            $this->objects[$file] = $writer;
        }
    }

    /**
     * Ask the objects for their related files.
     *
     * @param boolean $createifmissing If true, it will create missing files/directories.
     *
     * @return void
     *
     * @throws Exception When broken.
     */
    public function checkRelatedFiles(bool $createifmissing = false): void
    {
        foreach ($this->objects as $file => $writer) {
            $f = $writer->getRelatedFiles($this);
            foreach ($f as $path => $settings) {
                if (!file_exists($path)) {
                    if ($createifmissing) {
                        $type = $settings['type'] ?? 'file';
                        if ($type === 'dir') {
                            mkdir($path, 0777, true);
                        } elseif ($type === 'file') {
                            touch($path);
                        } else {
                            throw new \Exception("Unknown type for related $file file: $type");
                        }
                    } else {
                        echo "Related file $path from $file does not exist and createifmissing is false.\n";
                        continue;
                    }
                }
                // Always set permissions and ownership
                chmod($path, $settings['mode'] ?? 0644);
                $owner = $settings['owner'];
                $group = $settings['group'] ?? $owner;
                chown($path, $owner);
                chgrp($path, $group);
            }
        }
    }

    /**
     * Debugging method to get all writers
     *
     * @return array
     */
    public function getAllWriters(): array
    {
        return $this->objects;
    }

    /**
     * Get a specific writer by file name
     *
     * @param string $file The file name to get the writer for.
     *
     * @return WriterInterface|null The writer object or null if not found
     */
    public function getWriterByFile(string $file): ?WriterInterface
    {
        return $this->objects[$file] ?? null;
    }

    /**
     * Actually write the configuration files
     *
     * @return void
     */
    public function generate()
    {
        foreach ($this->objects as $file => $writer) {
            $writer->write();
        }
    }
}
