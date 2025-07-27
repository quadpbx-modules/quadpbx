<?php

namespace QuadPBX\Components;

class ExtensionsConfSection
{
    protected string $sectionName;
    protected array $matches = [];
    protected array $asadded = [];

    protected array $includes = ["start" => [], "end" => []];

    public function __construct(string $sectionName)
    {
        $this->sectionName = $sectionName;
    }

    public function addIncludeStart(string $include): void
    {
        $this->includes["start"][] = $include;
    }

    public function addIncludeEnd(string $include): void
    {
        $this->includes["end"][] = $include;
    }

    public function getMatch(string $astmatch): ExtSectionMatch
    {
        if (empty($this->matches[$astmatch])) {
            $esm = new ExtSectionMatch($astmatch);
            $this->matches[$astmatch] = $esm;
            $this->asadded[] = $esm;
        }
        return $this->matches[$astmatch];
    }

    public function getOutput(): string
    {
        $str = "[{$this->sectionName}]\n";
        foreach ($this->includes["start"] as $include) {
            $str .= "include => $include\n";
        }
        foreach ($this->asadded as $esm) {
            $str .= $esm->generateOutput();
        }
        foreach ($this->includes["end"] as $include) {
            $str .= "include => $include\n";
        }
        return $str . "\n";
    }
}
