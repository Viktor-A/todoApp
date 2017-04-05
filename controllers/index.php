<?php 

$tasks = $query_db->selectAll('todos');

require 'index.view.php';