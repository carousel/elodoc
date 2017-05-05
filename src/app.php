<?php

require __DIR__ . "../../vendor/autoload.php";


use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->setAsGlobal();
//$capsule->bootEloquent();
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'port' => 3306,
    'database' => 'notarydash',
    'username' => 'root',
    'password' => 'bumerang',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'strict' => true,
    'engine' => null,
]);

$status = Capsule::table('order_status')->insert(['order_id' => 1,'order_status' => 'closed']);
dd(Capsule::table('order_status')->get(['order_status']));