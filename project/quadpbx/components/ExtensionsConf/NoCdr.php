<?php

namespace QuadPBX\Components\ExtensionsConf;

class NoCdr extends ExtBase
{
    public function output(): string
    {
        return "Set(CDR_PROP(disable)=true)";
    }
}
