<?php 

require 'database/Connection.php'; 
require 'database/QueryBuilder.php';


//Connect to DB
//connectDb(); from old functions.php replaced with method from Connection.php
//$pdo = connectToDb();
//$pdo = Connection::make();

//$query = new QueryBuilder($pdo);

// $query = new QueryBuilder(
//   Connection::make()
// );

//instead of making it a global variable, just return value
return new QueryBuilder(
  Connection::make()
);