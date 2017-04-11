<?php

return [
    'database' => [
        'name' => 'mytodo',
<<<<<<< HEAD
        'username' => 'phpmyadmin',
        'password' => '$1rOot$1',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
=======
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1:3306',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
>>>>>>> 9d05c6dfd4e8b6442945d64a6579ea0cdfa37f7d
        ]
    ]
];
