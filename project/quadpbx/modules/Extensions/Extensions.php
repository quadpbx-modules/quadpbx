<?php

namespace QuadPBX\Modules\Extensions;

use QuadPBX\Components\Interfaces\BaseModuleDef;

class Extensions extends BaseModuleDef
{
    /**
     * @inheritDoc
     *
     * @return array
     */
    public function filesManaged(): array
    {
        return [
            'extensions_quadpbx.conf',
            'extensions_tenant_' . $this->tenant . '.conf',
        ];
    }

    public function getProcessedFile(string $filename): string
    {
        if ($filename === 'extensions_quadpbx.conf') {
            $c = new SystemExtConf($filename, $this->quad);
            $c->load();
            return $c->getOutput();
        } else {
            throw new \Exception("Unknown file requested: $filename");
        }
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
