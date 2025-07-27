<?php

namespace QuadPBX\Components\ExtensionsConf;

class LookupCidName extends ExtBase
{
    public function output(): string
    {
        return 'ExecIf($["${DB(cidname/${CALLERID(num)})}" != ""]?Set(CALLERID(name)=${DB(cidname/${CALLERID(num)})}))';
    }
}
