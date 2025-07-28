<?php

namespace QuadPBX\Components\DialplanObjects;

class LookupCidName extends BaseDialplanObject
{
    public function output(): string
    {
        return 'ExecIf($["${DB(cidname/${CALLERID(num)})}" != ""]?Set(CALLERID(name)=${DB(cidname/${CALLERID(num)})}))';
    }
}
