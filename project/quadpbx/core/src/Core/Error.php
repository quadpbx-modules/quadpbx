<?php

namespace QuadPBX\Core;

class Error
{
    public static function trigger(string $msg)
    {
        throw new \Exception($msg);
    }
}
