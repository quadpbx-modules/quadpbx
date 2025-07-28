<?php

namespace QuadPBX\Components\DialplanObjects;

class DbDelTree extends BaseDialplanObject
{
    public function output(): string
    {
        return "dbDeltree(" . $this->data . ")";
    }
}
