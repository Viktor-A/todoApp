<?php error_reporting(-1);

$query_db = require 'bootstrap.php';

$tasks = $query_db->selectAll('todos');

require 'index.view.php';