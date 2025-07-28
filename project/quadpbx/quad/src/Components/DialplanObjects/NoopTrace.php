<?php

namespace QuadPBX\Components\DialplanObjects;

class NoopTrace extends BaseDialplanObject
{
    public function output(): string
    {
        return "Noop([TRACE](" . $this->options . ") " . $this->data . ")";
    }
}
