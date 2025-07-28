<?php

namespace QuadPBX\Components\DialplanObjects;

class Zapateller extends BaseDialplanObject
{
    public function output(): string
    {
        return "Zapateller(" . $this->data . ")";
    }
}
