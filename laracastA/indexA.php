<?php

require 'functions.php';
require 'Task.php';

//$greeting = "Hello, World";

// $names = [
//   'Jeff',
//   'John',
//   'Mary'
// ];

// foreach ($names as $name) {
//   echo $name . ", ";
// }

// $animals = [
//   'Girraffe',
//   'Tiger',
//   'Panda',
//   'Monkey'
// ];

// $animals[] = 'elephant';

// $person = [
//   'age' => 31,
//   'hair' => 'brown',
//   'career' => 'web developer'
// ];

// $person['name'] = 'Putro';

// unset($person['age']);

// echo "<pre>";

// die('hello world');
// die(var_dump($person));
// var_dump($person);
// die();

// echo "</pre>";

// $task = [
//   'title' => 'Skripsi',
//   'due' => 'June',
//   'assigned_to' => 'Putro',
//   'completed' => false
// ];


//dd($animals);
// if (checkAge(16)) {
//   echo "Welcome to the club";
// } else {
//   echo "You are not old enough";
// }

// class Task {

//   public $description;

//   public $completed = false;

//   public function __construct($description) 
//   {
//     $this->description = $description;
//   }

//   public function complete() {
//     $this->completed = true;
//   }

//   public function isComplete() {
//     return $this->completed;
//   }

//   public function description() {
//     return $this->description;
//   }
// }

// $task = new Task('Go to the store');

// $task->complete();

// var_dump($task->isComplete());

// $tasks = [
//   new Task("Prepare for UAS Sistem Saham"),
//   new Task("Kesan Pesan Etika Profesi"),
//   new Task("Lanjut belajar PHP")
// ];

//dd($task);

//$tasks[0]->complete();


// try {
//   $pdo = new PDO('mysql:host=127.0.0.1; dbname=mytodo', 'root', '');
// } catch (PDOException $e) {
//   //die('Could not connect.');
//   die($e->getMessage());
// }

//access the above pdo from functions.php
$pdo = connectToDb();


// $statement = $pdo->prepare('select * from todos');

// $statement->execute();

// //$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
// $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
$tasks = fetchAllTasks($pdo);


//var_dump($results[0]->description);
//var_dump($tasks[0]->foobar());

require 'index.view.php';