<?php

namespace QuadPBX\Components\ExtensionsConf;

class SendDtmf extends ExtBase
{
    public function output(): string
    {
        return 'SendDTMF(' . $this->data . ')';
    }
}
