<?php

namespace QuadPBX\Core;

class Core
{

    protected static string $version = '2025.07.01';

    public static function getQuadVersion(): string
    {
        return self::$version;
    }

    public static function getProjectDir(): string
    {
        $basedir = realpath(__DIR__ . "/../../../../");
        return $basedir;
    }

    public static function boot()
    {
        print "I booted\n";
    }
}
