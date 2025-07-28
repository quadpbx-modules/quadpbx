<?php

namespace QuadPBX\Components\DialplanObjects;

class NoCdr extends BaseDialplanObject
{
    public function output(): string
    {
        return "Set(CDR_PROP(disable)=true)";
    }
}
