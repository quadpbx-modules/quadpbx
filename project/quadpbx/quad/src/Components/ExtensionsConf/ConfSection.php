<?php

namespace QuadPBX\Components\ExtensionsConf;

use Exception;

class ConfSection
{
    protected int $order;

    protected string $sectionName;
    protected array $matches = [];
    protected array $asadded = [];

    protected array $includes = ["start" => [], "end" => []];

    public function __construct(string $sectionName, int $order = 100)
    {
        $this->sectionName = $sectionName;
        $this->order = $order;
    }

    /**
     * Change the ordering of this section. Commands are 'set', 'add'
     * or 'sub'
     *
     * @param string $command 'set', 'add' or 'sub'
     * @param int    $diff    The difference
     *
     * @return int The new order
     * @throws Exception
     */
    public function changeOrder(string $command, int $diff): int
    {
        switch ($command) {
        case "set":
            $this->order = $diff;
        break;
        case "add":
            $this->order = $this->order + $diff;
        break;
        case "sub":
            $this->order = $this->order - $diff;
        break;
        default:
        throw new \Exception('Unknown changeOrder $command');
        }
        return $this->order;
    }

    /** @return int Current Order */
    public function getOrder(): int
    {
        return $this->order;
    }

    public function addIncludeStart(string $include): void
    {
        $this->includes["start"][] = $include;
    }

    public function addIncludeEnd(string $include): void
    {
        $this->includes["end"][] = $include;
    }

    public function getMatch(string $astmatch): SectionMatch
    {
        if (empty($this->matches[$astmatch])) {
            $esm = new SectionMatch($astmatch);
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
