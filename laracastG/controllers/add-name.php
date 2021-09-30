<?php 
//var_dump($_REQUEST);
//var_dump($_GET["age"]);
//var_dump($_POST);
//var_dump('You typed ' . $_POST['name']);
//var_dump($app['database']);

//We're going to review this later
/* class NamesController {
  public function addName() {
    
  }
} */
//My try
/* $submission = $app['database']->addName($_POST['name'], 'todos');
if ($submission) {
  echo "You've added {$_POST['name']} to your task.";
}
this ternary works
echo $submission ? "You've added {$_POST['name']} to your task." : ""; */

// $app['database']->insert('users', [
//   'name' => $_POST['name']
// ]);

App::get('database')->insert('users', [
  'name' => $_POST['name']
]);

//In Laravel it's like
// return redirect('/');
header('Location: /');