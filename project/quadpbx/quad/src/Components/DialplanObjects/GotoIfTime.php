<?php

namespace QuadPBX\Components\DialplanObjects;

class GotoIfTime extends BaseDialplanObject
{
    public function output(): string
    {
        return 'GotoIfTime(' . $this->data . '?' . $this->options . ')' ;
    }

    public function incrementContents($value)
    {
        $this->options += $value;
    }
}
