<?php

require_once __DIR__.'/../libs/config.php';

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'default',
        'default' => [
            'adapter' => 'mysql',
            'host'    => $_ENV['HOST'],
            'name'    => $_ENV['DB'],
            'user'    => $_ENV['USER'],
            'pass'    => $_ENV['PASS'],
            'port'    => '3306',
            'charset' => $_ENV['CHARSET'],
        ]
    ],
    'version_order' => 'creation'
];
