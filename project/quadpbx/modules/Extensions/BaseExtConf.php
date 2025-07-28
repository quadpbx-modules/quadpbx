<?php

namespace QuadPBX\Modules\Extensions;

use QuadPBX\Components\ExtensionsConf\ExtensionsConf;
use QuadPBX\Components\ExtensionsConf\FromArray;
use QuadPBX\Quad;

class BaseExtConf
{
    private ExtensionsConf $extc;

    private Quad $q;

    public function __construct(Quad $quad)
    {
        $this->extc = new ExtensionsConf($quad);
        $this->q = $quad;
    }

    public function load()
    {
        $j = json_decode(file_get_contents(__DIR__."/extconf.json"), true);
        FromArray::loadJsonConf($this->extc, $j);
    }

    public function getOutput(): string
    {
        return $this->extc->getOutput();
    }
}
