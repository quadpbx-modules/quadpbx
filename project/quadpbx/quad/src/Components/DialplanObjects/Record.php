<?php

namespace QuadPBX\Components\DialplanObjects;

class Record extends BaseDialplanObject
{
    public function output(): string
    {
        return "Record(" . $this->data . ")";
    }
}
