<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning PHP 7</title>
</head>

<body>
  <!-- Source: freeCodeCamp Youtube MikeDan -->
  <?php
  // Variables 
  // $characterName = "John";
  // $characterAge = 35;

  // echo "There once was a man named $characterName <br>";
  // echo "He was $characterAge years old <br>";
  // echo "He really liked the name $characterName <br>";
  // echo "But didn't like being $characterAge <br>";
  // echo "<br>";

  // Strings
  // $phrase = "Girrafe Academy";
  // echo str_replace("Girrafe", "Panda", $phrase);
  // echo "<br>";
  // echo substr($phrase, 8, 3); //output Aca
  // echo "<br>";
  // echo strlen($phrase);
  // echo "<br>";
  // $phrase[0] = "H";
  // echo $phrase; // output Hirrafe
  // echo "<br>";
  // echo strtolower($phrase);
  // echo "<br>";

  // Numbers
  // echo abs(-100); //output absolute of 100
  // echo "<br>";
  // echo pow(2, 4); //output 16
  // echo "<br>";
  // echo sqrt(16);
  // echo min(2, 16); //output 2
  // echo "<br>";
  // echo round(3.7); //output 4
  // echo "<br>";
  // echo ceil(3.3); //output 4
  // echo "<br>";
  // echo floor(3.9); //output 3

  ?>

  <!-- Getting Users Input -->

  <!-- <form action="site.php" method="get">
    Name: <input type="text" name="name">
    <input type="submit">
    <br>
    Age: <input type="number" name="age">
    <br>
  </form>
  <br> -->
  <!-- Your name: <?php //echo $_GET["name"]; //match name on input ?> -->
  <br>
  <!-- Your age:  --><?php //echo $_GET["age"]; //match name on input ?>

  <!-- Building basic calculator -->
  <!-- <h1>Calculator</h1>
  <form action="site.php" method="get">
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
    <input type="submit">
  </form> -->
  <!-- Answer:  --><?php //echo $_GET["num1"] + $_GET["num2"] ?>

  <!-- <br>
  <h1>Mad Libs Game</h1>
  <form action="site.php" method="get">
    Color: <input type="text" name="color"> <br>
    Plural Noun: <input type="text" name="pluralNoun"> <br>
    Celebrity: <input type="text" name="celebrity"> <br>
    <input type="submit">
  </form> -->
  <?php 
    // $color = $_GET["color"];
    // $pluralNoun = $_GET["pluralNoun"];
    // $celebrity = $_GET["celebrity"];
    // echo "Roses are $color <br>";
    // echo "$pluralNoun are blue <br>";
    // echo "I love $celebrity <br>";
  ?>
  <!-- <br> -->
  <!-- URL Parameters
  <h1>URL Parameters</h1> -->
 <!--  <form action="site.php" method="get">
    Name: <input type="text" name="name"> <br>
    <input type="submit">
  </form> -->
  <?php //echo $_GET["name"]; ?>

  <!-- <h1>GET vs POST</h1>
  <form action="site.php" method="post">
    Password: <input type="password" name="password"> <br>
    <input type="submit">
  </form> -->
  <?php //echo $_POST["password"]; ?>

  <!-- <h1>Arrays</h1> -->
  <?php 
    // $friends = array("Kevin", "Karen", "Oscar", "Jim"); 
    // echo $friends[1];
    // echo "<br>";
    // $friends[4] = "Mike";
    // echo count($friends); // 5
  ?>
  
  <!-- <h1>Using Checkboxes</h1>
  <form action="site.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
    Bananas: <input type="checkbox" name="fruits[]" value="bananas"> <br>
    <input type="submit">
  </form> -->

  <?php
    // $fruits = $_POST["fruits"];
    // echo $fruits[2];
  ?>

  <!-- <h1>Associative Arrays</h1>

  <form action="site.php" method="post">
    <input type="text" name="student">
    <input type="submit">
  </form> -->
  <?php
    //$grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
    // $grades["Jim"] = "F";
    // echo $grades["Jim"];
    // echo "<br>";
    // echo count($grades);
    //echo $grades[$_POST["student"]];
  ?>

  <!-- <h1>Function</h1> -->
  <?php
    // function sayHi($name, $age) {
    //   echo "Hello $name, you are $age <br>";
    // }

    // sayHi("Mike", 40);
    // sayHi("Dave", 13);
  ?>
  <!-- <h1>Return Statements</h1> -->
  <?php
    /* function cube($num) {
      return $num * $num * $num;
    }
    echo cube(4); */
  ?>
  <!-- <h1>If Statements</h1> -->
  <?php
    // $isMale = true;
    // $isTall = false;
    // if ($isMale && $isTall) {
    //   echo "You are tall male";
    // } elseif ($isMale && !$isTall){
    //   echo "You are a short male.";
    // }
  ?>

  <!-- <h1>Better Calculator</h1>
  <form action="site.php" method="post">
      First Num:<input type="number" step="0.1" name="num1"> <br>
      OP: <input type="text" name="op"> <br>
      Second Num: <input type="number" name="num2"> <br>
      <input type="submit">
      
  </form> -->

  <?php
    // $num1 = $_POST["num1"];
    // $num2 = $_POST["num2"];
    // $op = $_POST["op"];
    
    // if($op == "+") {
    //   echo $num1 + $num2;
    // } elseif ($op == "-") {
    //   echo $num1 - $num2;
    // } elseif ($op == "/") {
    //   echo $num1 - $num2;
    // } elseif ($op == "*") {
    //   echo $num1 - $num2;
    // } else {
    //   echo "Invalid Operator";
    // }
  ?>

  <!-- <h1>Switch Statements</h1>
  <form action="site.php" method="post">
      What was your grade?
      <input type="text" name="grade">
      <input type="submit">
  </form> -->

  <?php
    // $grade = $_POST["grade"];
    // switch($grade) {
    //   case "A":
    //     echo "You did amazing!";
    //     break;
    //   case "B":
    //     echo "You did pretty good";
    //     break;
    //   default:
    //     echo "Invalid Grade";
    // }
  ?>

  <!-- <h1>While Loops</h1> -->
  <?php
    // $index = 6;
    // do {
    //   echo "$index <br>";
    //   $index++;
    // } while($index <= 5);
  ?>

  <!-- <h1>For Loop</h1> -->
  <?php
    // $luckyNumbers = array(4, 8, 14, 16, 23, 42);
    // for($i = 0; $i < count($luckyNumbers); $i++) {
    //   echo "$luckyNumbers[$i] <br>";
    // }
  ?>
  <!-- <h1>Include HTML</h1> -->
  <?php //include "header.html" ?>
  
  <?php //include "footer.html" ?>
  <!-- <h1>Include PHP</h1> -->
  <?php 
    // $title = "My First Post";
    // $author = "Mike";
    // $wordCount = 400;
    // include "article-header.php";
  ?>
  <?php 
    // include "useful-tools.php";
    // sayHi("Putro");
    // echo "<br>";
    // echo $feetinMile;
  ?>
  <!-- <h1>Classes and Objects & Constructor</h1> -->
  <?php
    // class Book {
    //   var $title;
    //   var $author;
    //   var $pages;

      //Constructor
      // function __construct($name) {
      //   echo "$name <br>";
      // }

    //   function __construct($aTitle, $aAuthor, $aPages) {
    //     $this->title = $aTitle;
    //     $this->author = $aAuthor;
    //     $this->pages = $aPages;
        
    //   }
    // }

    //$book1 = new Book("Harry Potter", "JK Rowling", 400);
    // $book1->title = "Harry Potter";
    // $book1->author = "JK Rowling";
    // $book1->pages = 400;
    // To change the value:
    //$book1->title = "Skullduggery Pleasant";
    //$book2 = new Book("Lord Of the Rings", "Tolkien", 700);
    // $book2->title = "Lord Of the Rings";
    // $book2->author = "Tolkien";
    // $book2->pages = 700;

    // echo $book1->title;
    // echo "<br>";
    // echo $book2->title;
  ?>

  <!-- <h1>Object Functions</h1> -->
  <?php
    // class Student {
    //   var $name;
    //   var $major;
    //   var $gpa;

    //   function __construct($name, $major, $gpa) {
    //     $this->name = $name;
    //     $this->major = $major;
    //     $this->gpa = $gpa;
    //   }

    //   function hasHonors() {
    //     if($this->gpa >= 3.5) {
    //       return "true";
    //     }
    //     return "false";
    //   }
    // }

    // $student1 = new Student("Jim", "Business", 2.8);
    // $student2 = new Student("Pam", "Art", 3.6);
    // echo $student1->hasHonors();
  ?>

  <!-- <h1>Getters and Setters</h1> -->
  <?php
    // class Movie {
    //   public $title;
    //   private $rating;

    //   function __construct($title, $rating) {
    //     $this->title = $title;
    //     $this->setRating($rating);
    //   }

    //   function getRating() {
    //     return $this->rating;
    //   }

    //   function setRating($rating) {
    //     if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "NR") {
    //       $this->rating = $rating;
    //     } else {
    //       $this->rating = "NR";
    //     }
    //   }
    // }

    // $avengers = new Movie("Avengers", "PG-13");
    // //$avengers->setRating("Dog");
    // echo $avengers->getRating();
  ?>

  <h1>Inheritance</h1>
  <?php
    class Chef {
      function makeChicken() {
        echo "The chef makes chicken <br>";
      }

      function makeSalad() {
        echo "The chef makes salad <br>";
      }

      function makeSpecialDish() {
        echo "The chef makes bbq ribs <br>";
      }
    }

    class ItalianChef extends Chef {
      function makePasta() {
        echo "The chef makes pasta";
      }

      //Override the inherited function
      function makeSpecialDish() {
        echo "The chef makes chicken parm";
      }
    }

    $chef = new Chef();
    $chef->makeChicken();

    $italianChef = new ItalianChef();
    //$italianChef->makePasta();
    $italianChef->makeSpecialDish();
  ?>
</body>
 


</html>