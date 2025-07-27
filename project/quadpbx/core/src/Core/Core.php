<?php

namespace QuadPBX\Core;

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
        static $basedir = null;
        if (!$basedir) {
            $basedir = realpath(__DIR__ . "/../../../../");
        }
        return $basedir;
    }

    public static function getModulesDir(): string
    {
        $basedir = self::getProjectDir();
        return $basedir . '/quadpbx/modules';
    }

    /**
     * @return void
     */
    public static function boot()
    {
        print "I booted\n";
    }
}
