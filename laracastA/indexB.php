<?php 


$query = require 'bootstrap.php';
// require 'database/Connection.php'; 
// require 'database/QueryBuilder.php';

require 'Task.php';

//previously content from commented bootstrap.php


//$tasks = fetchAllTasks($pdo);
//$tasks = $query->selectAll('todos', 'Task');
$tasks = $query->selectAll('todos');

//manually iterate array to specify class name when var_dumping
// $tasks = array_map(function ($task) {
//   //return 'foo';
//   //return new Task();
//   $t = new Task();
//   $t->description = $task['description'];
// }, $tasks);

//die(var_dump($tasks));

require 'index.view.php';