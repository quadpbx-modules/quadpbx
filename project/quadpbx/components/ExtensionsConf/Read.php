<?php

namespace QuadPBX\Components\ExtensionsConf;

class Read extends ExtBase
{
    protected string $varname;
    protected string $filename;
    protected int $maxdigits;
    protected string $options;
    protected int $attempts;
    protected string $timeout;

    public function __construct(string $varname, string $filename, int $maxdigits = 0, string $options = '', int $attempts = 3, string $timeout = '')
    {
        $this->varname = $varname;
        $this->filename = $filename;
        $this->maxdigits = $maxdigits;
        $this->options = $options;
        $this->attempts = $attempts;
        $this->timeout = $timeout;
    }

    public function output(): string
    {
        return "Read(" . $this->varname . "," . $this->filename . "," . $this->maxdigits . "," . $this->options . "," . $this->attempts . "," . $this->timeout . ")";
    }
}
