<?php

namespace QuadPBX\Components\ExtensionsConf;

class SetLanguage extends Base
{
    public function output(): string
    {
        return "Set(CHANNEL(language)=" . $this->data . ")";
    }
}
