<?php 

class UsersController {
  public function index() {
    // Receive the request.
    // Delegate.
    // Return a response.
    $users = App::get('database')->selectAll('users');

    // require 'views/index.view.php';
    // why not keep using require? I don't know...
    // or why using return?
    // view('index', ['users' => $users]);
    return view('users', compact('users'));
  }

  public function store() {
    // Insert the user associated with the request.
    
    App::get('database')->insert('users', [
      'name' => $_POST['name']
    ]);
    
    // again I don't know why the need to use return here on the tutorial.
     redirect('users');
    
  }
}