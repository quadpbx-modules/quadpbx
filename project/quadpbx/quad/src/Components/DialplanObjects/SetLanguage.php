<?php

namespace QuadPBX\Components\DialplanObjects;

class SetLanguage extends BaseDialplanObject
{
    public function output(): string
    {
        return "Set(CHANNEL(language)=" . $this->data . ")";
    }
}
