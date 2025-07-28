<?php

namespace QuadPBX\Modules\Extensions;

use QuadPBX\Components\DialplanObjects\Congestion;
use QuadPBX\Components\DialplanObjects\Hangup;
use QuadPBX\Components\DialplanObjects\Wait;
use QuadPBX\Components\ExtensionsConf\ExtensionsConf;
use QuadPBX\Quad;

class SystemExtConf
{
    private $destfile;

    private $extensions;

    private ExtensionsConf $extc;

    public function __construct(string $destfile, Quad $quad)
    {
        $this->destfile = $destfile;
        $this->extc = new ExtensionsConf($quad);
    }

    public function load()
    {
        $base = $this->extc->getSection('base');
        $m = $base->getMatch('_[0-9]+');
        $m->appendObject(new Hangup());
        $m->appendObject(new Wait(10));
        $other = $this->extc->getSection('internal');
        $m = $other->getMatch('s');
        $m->appendObject(new Wait(10));
        $m->appendObject(new Congestion());
    }

    public function getOutput(): string
    {
        return $this->extc->getOutput();
    }
}
