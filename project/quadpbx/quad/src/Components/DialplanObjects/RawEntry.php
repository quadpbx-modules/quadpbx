<?php

namespace QuadPBX\Components\DialplanObjects;

class RawEntry extends BaseDialplanObject
{
    public function output(): string
    {
        // Note that '_' is explicitly skipped, and is used by FromArray
        if (!$this->name) {
            throw new \Exception("Raw entries must have a name, for tracing. Use '_' if you really don't want a name");
        }

        return $this->data;
    }
}
