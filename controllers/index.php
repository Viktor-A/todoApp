<?php

<<<<<<< HEAD
// $users = $app['database']->selectAll('users');

$tasks = $app['database']->selectAll('todos'); // todos or users
$users = $app['database']->selectAll('users'); 
=======
$tasks = $app['database']->selectAll('todos');
>>>>>>> 9d05c6dfd4e8b6442945d64a6579ea0cdfa37f7d

require 'views/index.view.php';