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
            $ret[] = "tenants/ext-tenant-$t.conf";
        }
        return $ret;
    }

    public function getClassForFile(string $filename) {
        if ($filename === 'extensions.conf') {
            $c = new BaseExtConf($this->quad);
            return $c;
        }
        if ($filename === 'extensions-quadpbx.conf') {
            $c = new SystemExtConf($this->quad);
            return $c;
        }
        if (preg_match("/ext-tenant-(.+).conf/", $filename, $out)) {
            $c = new TenantExtConf($this->quad, $out[1]);
            return $c;
        }
        throw new \Exception("Unknown file requested: $filename");
    }

    public function getProcessedFile(string $filename): string
    {
        $c = $this->getClassForFile($filename);
        $c->load();
        return $c->getOutput();
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
