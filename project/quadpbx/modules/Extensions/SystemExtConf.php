<?php

namespace QuadPBX\Modules\Extensions;

use QuadPBX\Components\DialplanObjects\ExtGoto;
use QuadPBX\Components\DialplanObjects\RawEntry;
use QuadPBX\Components\ExtensionsConf\ExtensionsConf;
use QuadPBX\Components\ExtensionsConf\FromArray;
use QuadPBX\Quad;
use QuadPBX\Tenant\IncomingDIDs;

class SystemExtConf
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
        $j = json_decode(file_get_contents(__DIR__."/sysextconf.json"), true);
        FromArray::loadJsonConf($this->extc, $j);

        $dids = new IncomingDIDs($this->q);

        // This is in the core system context, before anything is included
        $sysdids = $this->extc->getSection('sys-tenant-dids');

        foreach ($dids->getAllSystemDids() as $tenant => $didarr) {
            // This is the entrypoint for the tenant
            $sname = "tenant-$tenant-incoming";
            $inc = $this->extc->getSection($sname);
            $this->extc->addFileIncludeStart("tenant-$tenant.conf");
            $tset = new RawEntry("Set(TENANTNAME=$tenant)");
            $sysgoto = new ExtGoto($sname,'s',1);
            foreach ($didarr as $did) {
                // Add the goto ,s,1 to sys-tenant-dids
                $sm = $sysdids->getMatch($did);
                $sm->appendObject($sysgoto);
                // And now the moving bits for -incoming
                $tm = $inc->getMatch($did);
                $tm->appendObject($tset);
                $g = new ExtGoto("tenant-$tenant-fromexternal",'${INCOMINGDID}',1);
                $tm->appendObject($g);
            }
        }

    }

    public function getOutput(): string
    {
        return $this->extc->getOutput();
    }
}
