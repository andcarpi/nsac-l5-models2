<?php

// config for Andcarpi/NsacL5Models
return [

    // CONEXÃO AO BANCO DE DADOS
    'Connection' => [
        'Name' => 'NSacL5',
        'Info' => [
            'driver' => 'pgsql',
            'url' => env('NSAC_L5_DATABASE_URL'),
            'host' => env('NSAC_L5_DB_HOST', '127.0.0.1'),
            'port' => env('NSAC_L5_DB_PORT', '5432'),
            'database' => env('NSAC_L5_DB_DATABASE', 'nsac'),
            'username' => env('NSAC_L5_DB_USERNAME', 'postgres'),
            'password' => env('NSAC_L5_DB_PASSWORD', 'postgres'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],
    ],
];
