<?php

namespace QuadPBX\Components\ExtensionsConf;

use QuadPBX\Interfaces\DialplanObject;

class SectionMatch
{
    protected string $match;

    protected array $entries = [];

    public function __construct(string $match)
    {
        $this->match = $match;
    }

    public function appendObject(DialplanObject $entry): void
    {
        $this->entries[] = $entry;
    }

    public function generateOutput(): string
    {
        $str = '';
        foreach ($this->entries as $id => $entry) {
            $name = $entry->getName();
            $realid = $id + 1;
            if (empty($name)) {
                $str .= "exten => {$this->match},$realid,{$entry->output()}\n";
            } else {
                $str .= "exten => {$this->match},$realid($name),{$entry->output()}\n";
            }
        }
        return $str;
    }
}
