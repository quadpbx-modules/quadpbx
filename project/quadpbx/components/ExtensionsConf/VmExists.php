<?php

namespace QuadPBX\Components\ExtensionsConf;

class VmExists extends ExtBase
{
    public function output(): string
    {
        return 'Set(VMBOXEXISTSSTATUS=${IF(${VM_INFO(' . $this->data . ',exists)}?SUCCESS:FAILED)})';
    }
}
