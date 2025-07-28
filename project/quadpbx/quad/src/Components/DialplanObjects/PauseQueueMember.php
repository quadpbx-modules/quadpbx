<?php

namespace QuadPBX\Components\DialplanObjects;

class PauseQueueMember extends BaseDialplanObject
{
    public function __construct()
    {
        throw new \Exception("PauseQueueMember class is not implemented yet");
    }

    public function output(): string
    {
        return 'PauseQueueMember(Stuff)';
    }
}
