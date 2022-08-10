<?php
'pgsql' => [
      'driver' => 'pgsql',
        'host' => env('DB_HOST', 'eu-cdbr-west-03.cleardb.net'),
        'port' => env('DB_PORT', '3306'),
        'database' => env('DB_DATABASE', 'deneme'),
        'username' => env('DB_USERNAME', 'b37f567b3f741c'),
        'password' => env('DB_PASSWORD', 'f43585bf'),
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
    ]
    ?>