<?php

namespace QuadPBX\Components;

use QuadPBX\Quad;

class ExtensionsConf
{
    private array $sections = [];
    private array $order = [];

    private Quad $quad;

    public function __construct(Quad $quad)
    {
        $this->quad = $quad;
    }

    public function getSection(string $section, int $order = 100): ExtensionsConfSection
    {
        // Only add the section if it doesn't already exist
        if (empty($this->sections[$section])) {
            $ecs = new ExtensionsConfSection($section);
            $this->order[$order][] = $section;
            $this->sections[$section] = $ecs;
        }
        return $this->sections[$section];
    }

    public function getOutput(): string
    {
        $str = '';
        foreach ($this->sections as $section) {
            $str .= $section->getOutput();
        }
        return $str;
    }
}
