<?php

namespace QuadPBX\Core\Laravel;

use QuadPBX\Core\Console\ValidateInstall;

class LaravelServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * @param \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(\Illuminate\Routing\Router $router)
    {
        $this->addDbConfigs();
        $this->loadMigrationsFrom(__DIR__ . "/../../../migrations");
        $this->loadRoutesFrom(__DIR__ . '/../../../routes/coreroutes.php');
        $this->loadViewsFrom(__DIR__ . '/../../../views', 'qcore');
        if ($this->app->runningInConsole()) {
            $this->commands([ValidateInstall::class]);
        }
    }

    public function addDbConfigs()
    {
        $c = $this->genDbConfigs();
        config(['database.default' => $c['default']]);
        foreach ($c['connections'] as $n => $arr) {
            config(["database.connections.$n" => $arr]);
        }
    }

    public function genDbConfigs(): array
    {
        $basedir = "/opt/quadpbx";
        if (!is_dir($basedir)) {
            mkdir($basedir, 0777, true);
            chmod($basedir, 0777);
        }
        $dbs = [
            "core" => "$basedir/core.sqlite",
            "blob" => "$basedir/blob.sqlite",
            "userdb" => "$basedir/userdb.sqlite",
        ];
        $retarr = [
            "default" => "core",
            "connections" => []
        ];
        $sqlitedefault = [
            "driver" => "sqlite",
            "url" => null,
            "prefix" => "",
            "foreign_key_constraints" => true,
            "busy_timeout" => null,
            "journal_mode" => true,
            "synchronous" => null,
        ];
        foreach ($dbs as $name => $path) {
            $conf = $sqlitedefault;
            $conf['database'] = $path;
            $retarr["connections"][$name] = $conf;
            if (!file_exists($path)) {
                touch($path);
                chmod($path, 0777);
            }
        }
        return $retarr;
    }
}
