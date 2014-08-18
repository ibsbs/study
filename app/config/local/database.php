<?php
return array (
    'connections' => array (
        $_SERVER['DATABASE_DRIVER'] => array(
            'driver'    => $_SERVER['DATABASE_DRIVER'],
            'host'      => $_SERVER['DATABASE_HOST'],
            'database'  => $_SERVER['DATABASE_DATABASE'],
            'username'  => $_SERVER['DATABASE_USERNAME'],
            'password'  => $_SERVER['DATABASE_PASSWORD'],
            'charset'   => $_SERVER['DATABASE_CHARSET'],
            'collation' => $_SERVER['DATABASE_COLLATION'],
            'prefix'    => $_SERVER['DATABASE_PREFIX'],
        ),
    ),

    'redis' => array(

        'cluster' => true,

        'default' => array(
            'host'     => '127.0.0.1',
            'port'     => 6379,
            'database' => 0,
        ),

    ),
);