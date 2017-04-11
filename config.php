<?php

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'phpmyadmin',
        'password' => '$1rOot$1',
        'connection' => 'mysql:host=127.0.0.1:3306',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
