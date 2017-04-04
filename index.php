<?php error_reporting(-1);

require 'task.php';

try { 

	$pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=mytodo', 'root', '');

} catch (PDOException $e) {

	die($e->getMessage());  // or die('Could not connect.');

}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

require 'index.view.php';
require 'functions.php';

?>