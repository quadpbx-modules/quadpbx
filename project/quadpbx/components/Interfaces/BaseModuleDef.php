<?php

namespace QuadPBX\Components\Interfaces;

/** @package QuadPBX\Components\Interfaces */
abstract class BaseModuleDef
{
    /**
     * Return a single string identifying this module. For example,
     * the 'Extensions' module would return 'extensions'.
     *
     * @return string
     */
    abstract public function getModuleName(): string;

    /**
     * Generate a backup for this module. The output of this
     * should be able to be imported by 'restoreBackup'
     *
     * @return array
     */
    abstract public function getBackup(): array;

    /**
     * Import a backup created by 'getBackup'. Not sure
     * what it would return yet.
     *
     * @return array
     */
    abstract public function restoreBackup(array $backup): array;
}
