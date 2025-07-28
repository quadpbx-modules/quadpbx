<?php

namespace QuadPBX\Components\DialplanObjects;

class GosubIf extends BaseDialplanObject
{
    protected $true_priority;
    protected $false_priority;
    protected $condition;

    protected $true_args;
    protected $false_args;

    public function __construct($condition, $true_priority, $false_priority = false, $true_args = '', $false_args = '')
    {
        throw new \Exception("GosubIf needs to be checked");
        $this->true_priority = $true_priority;
        $this->false_priority = $false_priority;
        $this->true_args = $true_args;
        $this->false_args = $false_args;
        $this->condition = $condition;
    }

    public function output(): string
    {
        return 'GosubIf(' . $this->condition . '?' . $this->true_priority . '(' . $this->true_args . ')' . ($this->false_priority ? ':' . $this->false_priority . '(' . $this->false_args . ')' : '' ) . ')' ;
    }

    public function incrementContents($value)
    {
        $this->true_priority += $value;
        $this->false_priority += $value;
    }
}
