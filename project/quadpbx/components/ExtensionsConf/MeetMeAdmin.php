<?php

namespace QuadPBX\Components\ExtensionsConf;

class MeetMeAdmin extends ExtBase
{
    protected string $user;

    public function __construct(string $confno, string $command, string $user = '')
    {
        $this->data = $confno;
        $this->options = $command;
        $this->user = $user;
    }

    public function output(): string
    {
        return "MeetMeAdmin(" . $this->data . "," . $this->options . "," . $this->user . ")";
    }
}
