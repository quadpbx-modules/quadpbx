<?php

namespace QuadPBX\Components\DialplanObjects;

class SendDtmf extends BaseDialplanObject
{
    public function output(): string
    {
        return 'SendDTMF(' . $this->data . ')';
    }
}
