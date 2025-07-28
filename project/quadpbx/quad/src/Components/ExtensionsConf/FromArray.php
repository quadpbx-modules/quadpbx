<?php

namespace QuadPBX\Components\ExtensionsConf;

use QuadPBX\Components\DialplanObjects\RawEntry;
use QuadPBX\Interfaces\DialplanObject;

class FromArray {

    public static function loadSection(ConfSection $s, array $settings): ConfSection {
        foreach ($settings as $match => $settings) {
            $m = $s->getMatch($match);
            self::loadMatch($m, $settings);
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
}