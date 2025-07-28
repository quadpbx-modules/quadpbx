<?php

namespace QuadPBX;

use Exception;
use QuadPBX\Core\Core;
use QuadPBX\Interfaces\BaseModuleDef;

class Quad
{
    private string $tenant;

    private array $modules = [];

    /**
     * Create the awesome beast that is QuadPBX.
     *
     * @param string $tenant Defaults to 'default'.
     *
     * @return void
     * @throws Exception
     */
    public function __construct(string $tenant = 'default')
    {

        $tenantcleanname = preg_replace('/[^a-z0-9]/', '', strtolower($tenant));
        if ($tenantcleanname !== $tenant) {
            throw new Exception("Tenant name '$tenant' is invalid, must be alphanumeric only.");
        }
        $this->tenant = $tenant;
        print "Yo dawg, I am Quad!\n";
        $this->modules = $this->loadAllModules();
    }

    /**
     * Find all modules in the modules directory and load them. Probably
     * needs to expand to Core or something, too.
     *
     * @return array
     * @throws Exception
     */
    private function loadAllModules(): array
    {
        $modules = [];
        $dirs = glob(Core::getModulesDir() . '/*', GLOB_ONLYDIR);
        foreach ($dirs as $d) {
            $yaml = "$d/modconf.yaml";
            if (file_exists($yaml)) {
                $y = yaml_parse_file($yaml);
                $modname = $y['modname'];
                /** @var BaseModuleDef */
                $class = new $y['fullclassname']($this, $d);
                $modsays = $class->getModuleName();
                if ($modsays !== $modname) {
                    throw new \Exception("Module $modname from $d says it is $modsays, this is wrong!");
                }
                $modules[$modname] = ["class" => $class, "yaml" => $y, "dir" => $d];
            }
        }
        return $modules;
    }

    /** @return array  */
    public function getLoadedModules(): array
    {
        return $this->modules;
    }

    /**
     * Get a module by name. To be used by something like
     * Quad->Module('awesome')->doSomething();
     *
     * @param string $name Name of the module to get.
     *
     * @return BaseModuleDef
     * @throws Exception
     *
     * @phpcs Stop it complaining about the method name.
     *
     * @phpcs:disable PEAR.NamingConventions.ValidFunctionName.ScopeNotCamelCaps,PSR1.Methods.CamelCapsMethodName.NotCamelCaps
     */
    public function Module(string $name): BaseModuleDef
    {
        // phpcs:enable
        if (!isset($this->modules[$name])) {
            throw new \Exception("Module $name not found");
        }
        return $this->modules[$name]['class'];
    }

    /** @return string  */
    public function getTenant(): string
    {
        return $this->tenant;
    }

    /** @return array  */
    public function getAllTenants(): array
    {
        return ['default', 'honestrob'];
    }

    public function generateFiles()
    {
        $filelist = [];
        foreach ($this->modules as $name => $mod) {
            /** @var BaseModuleDef $module */
            $module = $mod['class'];
            foreach ($module->filesManaged() as $file) {
                try {
                    if (strpos('/', $file) !== 0) {
                        $destfile = "/etc/asterisk/$file";
                    } else {
                        $destfile = $file;
                    }
                    $dir = dirname($destfile);
                    if (!is_dir($dir)) {
                        mkdir($dir, 0777, true);
                    }
                    $content = $module->getProcessedFile($file);
                    $filelist[$destfile] = strlen($content);
                    file_put_contents($destfile, $content);
                } catch (\Exception $e) {
                    print "Error generating file $file: " . $e->getMessage() . "\n";
                }
            }
        }
        return $filelist;
    }
}
