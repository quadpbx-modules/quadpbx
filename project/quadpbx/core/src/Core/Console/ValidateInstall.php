<?php

namespace QuadPBX\Core\Console;

use Illuminate\Console\Command;

class ValidateInstall extends Command
{

    protected $signature = 'quad:validate';
    protected $description = 'Validate basic QPBX install';

    public function handle()
    {
        print "I would handle things\n";
    }
}
