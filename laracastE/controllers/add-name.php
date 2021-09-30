<?php 

//var_dump($_REQUEST);
//var_dump($_GET["age"]);
//var_dump($_POST);
//var_dump('You typed ' . $_POST['name']);
//var_dump($app['database']);

$submission = $app['database']->addName($_POST['name'], 'todos');
if ($submission) {
  echo "You've added {$_POST['name']} to your task.";
}

//echo $submission ? "You've added {$_POST['name']} to your task." : "";