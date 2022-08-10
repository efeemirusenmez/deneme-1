<?php
'pgsql' => [
      'driver' => 'pgsql',
        'host' => env('DB_HOST', 'https://deneme-emir.herokuapp.com/'),
        'port' => env('DB_PORT', '5432'),
        'database' => env('DB_DATABASE', 'dbXXXXXXXXXXXX'),
        'username' => env('DB_USERNAME', 'XXXXXXXXXXXXXX'),
        'password' => env('DB_PASSWORD', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'),
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
    ]
    ?>