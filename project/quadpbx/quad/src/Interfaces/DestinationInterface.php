<?php

namespace QuadPBX\Interfaces;

use QuadPBX\Components\DialplanObjects\Hangup;

abstract class DestinationInterface
{
    protected ?DialplanObject $d = null;

    public function setDest(DialplanObject $d) {
        $this->d = $d;
    }

    public function getDestinationObj(): DialplanObject {
        if ($this->d) {
            return $this->d;
        }
        $o = new Hangup();
        return $o;
    }
}
