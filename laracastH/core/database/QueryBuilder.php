<?php 

class QueryBuilder {
  //for QueryBuilder to do its job, it needs access to a $pdo object.
  protected $pdo;

  public function __construct($pdo) {
    $this->pdo = $pdo;
  }

  public function selectAll($table) {
    $statement = $this->pdo->prepare("select * from {$table}");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  //My try
  /* public function addName($name, $table) {
    $statement = $this->pdo->prepare("INSERT INTO {$table} 
      (description, completed) VALUES ('{$name}', 0)"
    );
    $statement->execute();
    return true;
  } */

  public function insert($table, $parameters) {
    //insert into %s (%s) values (%s)
    //insert into names (name, email)  values (:name, :email)
    //insert into names (name, email)  values ('Joe', 'joe@example.com')
    // $statement->execute([':name']);
    //die(var_dump(array_keys($parameters)));

    //implode
    // $arr = ['one', 'two', 'three'];
    // implode(', ', $arr); // one, two, three

    $sql = sprintf(
      'INSERT INTO %s (%s) VALUES (%s)',
      $table, 
      implode(', ', array_keys($parameters)),
      //values'd be like ':name, :email, :age'
      //and we'll bind them.
      // or use map like
      // array_map(function ($param) {
      //   return ":{$param}";
      // }, array_keys($parameters))
      ':' . implode(', :', array_keys($parameters))
    );
    
    try {
      $statement = $this->pdo->prepare($sql);
      $statement->execute($parameters);
      //to bind the param with whatever value's passed
      //$statement->bindParam(':name', 'Joe');
      //or just pass array inside like execute([]);
    } catch (Exception $e) {
      // die($e->getMessage());
      die('Whoops, something went wrong.');
    }
    

    
    
    //die(var_dump($sql));
    //$statement->execute(['name' => 'Joe', 'email' => 'joe@example.com']);
  }
}