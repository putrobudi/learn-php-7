<?php 

// class Contractor {
// for contractor to do its job, it needs $electrician, $plumber and $designer
//   protected $electrician;

//   protected $plumber;

//   protected $designer;

//   public function __construct($electrician, $plumber, $designer) {
//     $this->electrician = $electrician;
//     $this->plumber = $plumber;
//   }

//   public function performWork() {
//     // $electrician
//     // $plumber
//     // $designer
// }


class QueryBuilder {
  //for QueryBuilder to do its job, it need access to a $pdo object.
  protected $pdo;

  public function __construct(/* PDO */ $pdo) {
    $this->pdo = $pdo;
  }

  public function selectAll($table /* , $intoClass */) {
    $statement = $this->pdo->prepare("select * from {$table}");

    $statement->execute();

    //if you specify the class parameter, you'll see the result when you var_dump it.
    //return $statement->fetchAll(PDO::FETCH_CLASS, "Task");
    //e.g of dynamic parameter
    //return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    return $statement->fetchAll(PDO::FETCH_CLASS);

  }

  public function addName($name, $table) {
    $statement = $this->pdo->prepare("INSERT INTO {$table} 
      (description, completed) VALUES ('{$name}', 0)"
    );
    $statement->execute();
    return true;
  }
}