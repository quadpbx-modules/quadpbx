<?php

namespace QuadPBX\Components\DialplanObjects;

class DPickup extends BaseDialplanObject
{
    public function output(): string
    {
        return "DPickup(" . $this->data . ")";
    }
}
