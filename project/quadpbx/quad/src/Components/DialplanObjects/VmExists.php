<?php

namespace QuadPBX\Components\DialplanObjects;

class VmExists extends BaseDialplanObject
{
    public function output(): string
    {
        return 'Set(VMBOXEXISTSSTATUS=${IF(${VM_INFO(' . $this->data . ',exists)}?SUCCESS:FAILED)})';
    }
}
