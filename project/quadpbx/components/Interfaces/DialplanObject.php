<?php

namespace QuadPBX\Interfaces;

/**
 * Basic interface so that every Extension object has the same traits
 */
interface DialplanObject
{
    public function output(): string;
}
