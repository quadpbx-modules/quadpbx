<?php

namespace QuadPBX\Components\ExtensionsConf;

use QuadPBX\Quad;

class ExtensionsConf
{
    private array $sections = [];

    private array $fileincludes = ["start" => [], "end" => [] ];

    private Quad $quad;

    public function __construct(Quad $quad)
    {
        $this->quad = $quad;
    }

    public function getSection(string $section, int $order = 100): ConfSection
    {
        // Only add the section if it doesn't already exist
        if (empty($this->sections[$section])) {
            $ecs = new ConfSection($section, $order);
            $this->sections[$section] = $ecs;
        }
        return $this->sections[$section];
    }

    public function addFileIncludeStart(string $filename) {
        $this->fileincludes['start'][] = $filename;
    }

    public function addFileIncludeEnd(string $filename) {
        $this->fileincludes['end'][] = $filename;
    }

    public function getOutput(): string
    {
        $ordered = [];
        foreach ($this->sections as $s) {
            $so = $s->getOrder();
            $ordered[$so][] = $s;
        }
        ksort($ordered);
        $str = "";
        foreach ($this->fileincludes['start'] as $f) {
            $str .= "#include $f\n";
        }
        foreach ($ordered as $o => $sections) {
            foreach ($sections as $section) {
                $str .= $section->getOutput();
            }
        }
        foreach ($this->fileincludes['end'] as $f) {
            $str .= "#include $f\n";
        }
        return $str;
    }
}
