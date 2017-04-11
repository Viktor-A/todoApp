<?php

// $users = $app['database']->selectAll('users');

$tasks = $app['database']->selectAll('todos'); // todos or users
$users = $app['database']->selectAll('users'); 

require 'views/index.view.php';