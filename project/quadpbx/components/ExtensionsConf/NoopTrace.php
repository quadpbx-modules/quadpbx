<?php

namespace QuadPBX\Components\ExtensionsConf;

class NoopTrace extends ExtBase
{
    public function output(): string
    {
        return "Noop([TRACE](" . $this->options . ") " . $this->data . ")";
    }
}
