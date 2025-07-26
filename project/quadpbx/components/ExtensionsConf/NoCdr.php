<?php

namespace QuadPBX\Components\ExtensionsConf;

class NoCdr extends Base
{
    public function output(): string
    {
        return "Set(CDR_PROP(disable)=true)";
    }
}
