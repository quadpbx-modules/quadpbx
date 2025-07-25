<?php

namespace QuadPBX\Core;

/**
 * @package QuadPBXCore
 */
class Core
{
    protected static string $version = '2025.07.01';

    /**
     * @return string
     */
    public static function getQuadVersion(): string
    {
        return self::$version;
    }

    /**
     * @return string
     */
    public static function getProjectDir(): string
    {
        $basedir = realpath(__DIR__ . "/../../../../");
        return $basedir;
    }

    /**
     * @return void
     */
    public static function boot()
    {
        print "I booted\n";
    }
}
