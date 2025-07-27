<?php

use Illuminate\Foundation\Application;
use QuadPBX\Components\EtcAsterisk\EtcAsterisk;
use QuadPBX\Install\DotEnv;
use QuadPBX\Modules\Extensions\Extensions;
use QuadPBX\Quad;

require __DIR__ . '/vendor/autoload.php';
/**
 * @var Application $app
*/
$app = include_once __DIR__ . '/bootstrap/app.php';

$q = new  Quad();

var_dump($q->generateFiles());
