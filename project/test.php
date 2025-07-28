<?php

use Illuminate\Foundation\Application;
use QuadPBX\Core\Models\Database\System;

require __DIR__ . '/vendor/autoload.php';
/**
 * @var Application $app
*/
$app = include_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$name = 'systemname';
$tenant = 'system';
$value = 'HonestRob and stuff';

print "Is now " . System::getVal($tenant, $name) . "\n";
