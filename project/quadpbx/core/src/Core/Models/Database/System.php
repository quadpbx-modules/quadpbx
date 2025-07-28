<?php

namespace QuadPBX\Core\Models\Database;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $table = 'qsystem';
    public $timestamps = false;
    protected $connection = 'core';

    public static function getModel(string $tenant, string $key, string $group = 'default'): static
    {
        return static::firstOrNew(['tenant' => $tenant, 'name' => $key, 'group' => $group]);
    }

    public static function getVal(string $tenant, string $key, string $group = 'default')
    {
        $current = static::where(['tenant' => $tenant, 'name' => $key, 'group' => $group])->first();
        if (!$current) {
            return null;
        }
        if ($current->type === 'raw') {
            return $current->value;
        }
        throw new \Exception("Unknown type: " . $current->type);
    }

    public static function setVal(string $tenant, string $key, $value, string $group = 'default')
    {
        $m = static::getModel($tenant, $key, $group);
        if (is_object($value)) {
            $value = serialize($value);
            $type = "ser";
        } elseif (is_array($value)) {
            $value = json_encode($value);
            $type = "json";
        } else {
            $type = "raw";
        }
        if (strlen($value) > 100) {
            throw new \Exception("Todo: Write sharding and blob-ing");
        }
        $m->value = $value;
        $m->type = $type;
        $m->save();
        return $m;
    }
}
