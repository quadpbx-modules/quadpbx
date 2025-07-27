<?php

namespace QuadPBX\Components\ExtensionsConf;

class SetLanguage extends ExtBase
{
    public function output(): string
    {
        return "Set(CHANNEL(language)=" . $this->data . ")";
    }
}
