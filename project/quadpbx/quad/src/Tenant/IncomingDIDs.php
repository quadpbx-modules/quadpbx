<?php

namespace QuadPBX\Tenant;

use QuadPBX\Components\DialplanObjects\Hangup;
use QuadPBX\Components\DialplanObjects\RawEntry;
use QuadPBX\Destination;
use QuadPBX\Interfaces\DestinationInterface;
use QuadPBX\Quad;

class IncomingDIDs {

    private Quad $q;

    private $alldids = [
        "999" => [ "tenant" => "honestrob", "dest" => "NoOp(Dest1)" ],
        "888" => [ "tenant" => "honestrob", "dest" => "NoOp(Dest2)" ],
        "6175555555" => [ "tenant" => "honestrob", "dest" => "NoOp(Dest2)" ],
        "77123" => [ "tenant" => "otherone", "dest" => "NoOp(BugIfSeen)" ], // Tenant does not exist
        "011899988119991197253" => [ "tenant" => "default", "dest" => "NoOp(Emergency)" ],
    ];

    public function __construct(Quad $q)
    {
        $this->q = $q;
    }

    public function getDestinationForDid(string $did): DestinationInterface {

        $d = new Destination();
        $o = new RawEntry($this->alldids[$did]['dest']);
        $d->addDest($o);
        $d->addDest(new Hangup())->setComment('Should never happen');
        return $d;
    }

    public function getDids(?string $tenantoverride = null): array {
        if ($tenantoverride) {
            $tenant = $tenantoverride;
        } else {
            $tenant = $this->q->getTenant();
        }
        $retarr = [];
        foreach ($this->alldids as $did => $data) {
            if ($data['tenant'] == $tenant) {
                $retarr[] = $did;
            }
        }
        return $retarr;
    }

    public function getAllSystemDids(): array {
        $alldids = [];
        foreach ($this->q->getAllTenants() as $t) {
            $alldids[$t] = [];
            foreach ($this->alldids as $did => $data) {
                if ($data['tenant'] == $t) {
                    $alldids[$t][] = $did;
                }
            }
        }
        return $alldids;
    }
}