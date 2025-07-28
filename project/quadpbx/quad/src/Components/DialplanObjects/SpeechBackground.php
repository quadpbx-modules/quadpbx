<?php

namespace QuadPBX\Components\DialplanObjects;

class SpeechBackground extends BaseDialplanObject
{
    protected int $timeout;

    public function __construct(string $data, string $options = '', int $timeout = 30)
    {
        $this->data = $data;
        $this->options = $options;
        $this->timeout = $timeout;
    }

    public function output(): string
    {
        return "SpeechBackground(" . $this->data . "," . $this->timeout . "," . $this->options . ")";
    }
}
