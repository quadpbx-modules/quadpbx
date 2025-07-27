<?php

namespace QuadPBX\Components\ExtensionsConf;

class SayNumber extends ExtBase
{
    public function output(): string
    {
        // Default to a female voice if no options are provided. This doesn't
        // really work that well in practice.
        if (!$this->options) {
            $this->options = "f";
        }
        return "SayNumber(" . $this->data . "," . $this->options . ")";
    }
}
