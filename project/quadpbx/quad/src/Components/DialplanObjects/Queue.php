<?php

namespace QuadPBX\Components\DialplanObjects;

class Queue extends BaseDialplanObject
{
    public function __construct()
    {
        throw new \Exception("Queue class is not implemented yet");
    }

    public function output(): string
    {
        return "Queue(Nah)";
    }
}
