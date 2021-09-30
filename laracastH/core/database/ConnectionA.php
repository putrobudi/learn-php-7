<?php 

class Connection {
  //Static is a way to access a method globally without requiring an instance. 
  public static function make() {
    try {
      return new PDO('mysql:host=127.0.0.1; dbname=mytodo', 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}

//this is how you'd access a method normally
// $connection = new Connection();

// $connection->make();

//static method. If you don't need an instance but just need to do some logic.
//Connection::make();

//$pdo = Connection::make();