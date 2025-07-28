<?php

namespace QuadPBX\Components\DialplanObjects;

class MeetMeAdmin extends BaseDialplanObject
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
