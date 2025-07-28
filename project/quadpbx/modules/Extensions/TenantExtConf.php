<?php

namespace QuadPBX\Modules\Extensions;

use QuadPBX\Components\ExtensionsConf\ExtensionsConf;
use QuadPBX\Components\ExtensionsConf\FromArray;
use QuadPBX\Quad;
use QuadPBX\Tenant\IncomingDIDs;

class TenantExtConf
{

    private string $tenant;

    private ExtensionsConf $extc;

    private Quad $q;

    public function __construct(Quad $quad, string $tenant)
    {
        $this->extc = new ExtensionsConf($quad);
        $this->tenant = $tenant;
        $this->q = $quad;
    }

    public function load()
    {
        $this->generateDidsFromExternal();
    }

    public function generateDidsFromExternal() {
        $incoming = new IncomingDIDs($this->q);
        $sname = "tenant-".$this->tenant."-fromexternal";
        $s = $this->extc->getSection($sname);
        foreach ($incoming->getDids($this->tenant) as $d) {
            $dest = $incoming->getDestinationForDid($d);
            $o = $dest->getDestinationObj();
            $m = $s->getMatch($d);
            $m->appendObject($o);
        }
    }

    public function getOutput(): string
    {
        return $this->extc->getOutput();
    }
}
