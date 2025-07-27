<?php

namespace QuadPBX\Components\EtcAsterisk;

use QuadPBX\Components\Writers\Generic;

class EtcAsterisk
{
    protected $srcfiles = [
        'asterisk.conf' => ["class" => Generic::class],
    ];

    public function go()
    {
        foreach ($this->srcfiles as $file => $settings) {
            print "Processing file: $file\n";
            $c = new $settings['class']($file);
            $destfile = $settings['destfile'] ?? '/etc/asterisk/' . $file;
            file_put_contents($destfile, $c->generateOutput());
            print "File written to: $destfile\n";
        }
    }
}
