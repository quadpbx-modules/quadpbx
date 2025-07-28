<?php

namespace QuadPBX\Components\DialplanObjects;

class PrivacyManager extends BaseDialplanObject
{
    public function output(): string
    {
        return "PrivacyManager(" . $this->data . ")";
    }
}
