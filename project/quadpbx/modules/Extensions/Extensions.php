<?php

namespace QuadPBX\Modules\Extensions;

use QuadPBX\Interfaces\BaseModuleDef;

class Extensions extends BaseModuleDef
{
    /**
     * @inheritDoc
     *
     * @return array
     */
    public function filesManaged(): array
    {
        $ret = [
            'extensions.conf',
            'extensions-quadpbx.conf',
        ];
        foreach ($this->quad->getAllTenants() as $t) {
            $ret[] = "tenant-$t.conf";
        }
        return $ret;
    }

    public function getProcessedFile(string $filename): string
    {
        if ($filename === 'extensions.conf') {
            $c = new BaseExtConf($this->quad);
            $c->load();
            return $c->getOutput();
        }
        if ($filename === 'extensions-quadpbx.conf') {
            $c = new SystemExtConf($this->quad);
            $c->load();
            return $c->getOutput();
        }
        if (preg_match("/tenant-(.+).conf/", $filename, $out)) {
            $c = new TenantExtConf($this->quad, $out[1]);
            $c->load();
            return $c->getOutput();
        }
        throw new \Exception("Unknown file requested: $filename");
    }

    public function getBackup(): array
    {
        return [];
    }

    public function restoreBackup(array $backup): array
    {
        return [];
    }

    public function getModuleName(): string
    {
        return "extensions";
    }
}
