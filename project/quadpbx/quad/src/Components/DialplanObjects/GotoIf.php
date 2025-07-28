<?php

namespace QuadPBX\Components\DialplanObjects;

class GotoIf extends BaseDialplanObject
{
    protected $true_priority;
    protected $false_priority;
    protected $condition;

    public function __construct($condition, $true_priority, $false_priority = false)
    {
        $this->true_priority = $true_priority;
        $this->false_priority = $false_priority;
        $this->condition = $condition;
    }

    public function output(): string
    {
        return 'GotoIf(' . $this->condition . '?' . $this->true_priority . ($this->false_priority ? ':' . $this->false_priority : '' ) . ')' ;
    }

    public function incrementContents($value)
    {
        $this->true_priority += $value;
        $this->false_priority += $value;
    }
}
