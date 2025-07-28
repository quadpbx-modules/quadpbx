<?php

namespace QuadPBX\Interfaces;

/**
 * Basic interface so that every Extension object has the same traits
 */
interface DialplanObject
{
    /**
     * The actual output, as to be written to dialplan.
     *
     * @return string
     */
    public function output(): string;

    /**
     * Used to set names for Goto's or finding this later.
     *
     * @param string $name Simple name to set
     *
     * @return void
     */
    public function setName(string $name): void;
}
