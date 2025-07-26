<?php

namespace QuadPBX\Components\ExtensionsConf;

class ConfBridge extends Base
{
    protected string $pin;

    public function __construct(string $confno, string $options = '', string $pin = '')
    {
        $this->data = $confno;
        $this->options = $options;
        $this->pin = $pin;
    }

    public function output(): string
    {
        return "ConfBridge(" . $this->data . "," . $this->options . "," . $this->pin . ")";
    }
}
