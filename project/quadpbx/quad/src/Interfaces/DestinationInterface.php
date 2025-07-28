<?php

namespace QuadPBX\Interfaces;

use QuadPBX\Components\DialplanObjects\Hangup;

abstract class DestinationInterface
{
    /** @var DialPlanObject[] */
    protected array $dests = [];

    /**
     * Add a dest to be returned. Will append to the existing ones
     *
     * @param DialplanObject $d
     *
     * @return DialPlanObject
     */
    public function addDest(DialplanObject $d) {
        $this->dests[] = $d;
        return $d;
    }

    /** @return DialPlanObject[] */
    public function getDestinationObjs(): array {
        if (!$this->dests) {
            $this->dests = [ new Hangup('NoDest') ];
        }
        return $this->dests;
    }
}
