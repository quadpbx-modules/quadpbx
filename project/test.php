<?php

use Illuminate\Foundation\Application;
use QuadPBX\Install\DotEnv;

require __DIR__ . '/vendor/autoload.php';
/** @var Application $app */
$app = require_once __DIR__ . '/bootstrap/app.php';

$d = new DotEnv();
var_dump($d->needsSaving());
