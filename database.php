<?php
'pgsql' => [
      'driver' => 'pgsql',
        'host' => env('DB_HOST', 'mysql://b37f567b3f741c:f43585bf@eu-cdbr-west-03.cleardb.net/heroku_123bc0464991a9f?reconnect=true'),
        'port' => env('DB_PORT', '5432'),
        'database' => env('DB_DATABASE', 'deneme'),
        'username' => env('DB_USERNAME', 'b37f567b3f741c'),
        'password' => env('DB_PASSWORD', 'f43585bf'),
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
    ]
    ?>