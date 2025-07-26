<?php

namespace QuadPBX\Components\ExtensionsConf;

class SendDtmf extends Base
{
    public function output(): string
    {
        return 'SendDTMF(' . $this->data . ')';
    }
}
