<?php

namespace QuadPBX\Components\ExtensionsConf;

class LookupCidName extends Base
{
    public function output(): string
    {
        return 'ExecIf($["${DB(cidname/${CALLERID(num)})}" != ""]?Set(CALLERID(name)=${DB(cidname/${CALLERID(num)})}))';
    }
}
