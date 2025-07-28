<?php

namespace QuadPBX\Core\Console;

use Illuminate\Console\Command;
use QuadPBX\Core\Models\Database\System;

class Qtest extends Command
{
    protected $signature = 'qtest';
    protected $description = 'Test stuff';

    public function handle()
    {
        $name = 'systemname';
        $tenant = 'system';
        $value = 'HonestRob and stuff';

        $m = System::getVal($tenant, $name);
        print "$m\n";
        System::setVal($tenant, $name, $value . time());
        print "Is now " . System::getVal($tenant, $name) . "\n";
    }
}
