<?php

namespace QuadPBX\Components\ExtensionsConf;

use QuadPBX\Components\DialplanObjects\RawEntry;
use QuadPBX\Interfaces\DialplanObject;

class FromArray {

    public static function loadJsonConf(ExtensionsConf $e, array $json) {
        foreach ($json as $section => $dialplan) {
            if (strpos($section, "#") === 0) {
                self::processHash($e, $section, $dialplan);
            } else {
                $s = $e->getSection($section);
                self::loadSection($s, $dialplan);
            }
        }
    }

    public static function loadSection(ConfSection $s, array $settings): ConfSection {
        foreach ($settings as $match => $settings) {
            if ($match === '__includes') {
                self::processIncludes($s, $settings);
            } else {
                $m = $s->getMatch($match);
                self::loadMatch($m, $settings);
            }
        }
        return $s;
    }

    public static function loadMatch(SectionMatch $m, array $settings): SectionMatch {
        foreach ($settings as $row) {
            $o = self::getObject($row);
            $m->appendObject($o);
        }
        return $m;
    }

    public static function getObject(array $row): DialplanObject {
        $o = new RawEntry($row[0]);
        $comment = $row[1] ?? '';
        $name = $row[2] ?? '_';
        $o->setComment($comment);
        $o->setName($name);
        return $o;
    }

    public static function processIncludes(ConfSection $s, array $includes) {
        $start = $includes['start'] ?? [];
        $end = $includes['end'] ?? [];
        foreach ($start as $i) {
            $s->addIncludeStart($i);
        }
        foreach ($end as $i) {
            $s->addIncludeEnd($i);
        }
    }

    public static function processHash(ExtensionsConf $e, string $section, array $dialplan) {
        if ($section === '#fileincludes') {
            $start = $dialplan['start'] ?? [];
            $end = $dialplan['end'] ?? [];
            foreach ($start as $f) {
                $e->addFileIncludeStart($f);
            }
            foreach ($end as $f) {
                $e->addFileIncludeEnd($f);
            }
            return;
        }
        throw new \Exception("Unknown hashkey $section");
    }
}