<?php
namespace OrmWrapper;

use Illuminate\Database\Capsule\Manager as Capsule;

class OrmWrapper
{
    public static function boot(array $dbConfig)
    {
        $capsule = new Capsule;
        $capsule->addConnection($dbConfig);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
