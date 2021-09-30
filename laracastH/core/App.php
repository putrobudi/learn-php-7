<?php 
//before you create the class, design how you'll interact with it.
class App {
  protected static $registry = [
    //registry will look like this
    // 'config' => [],
    // 'database' => $queryBuilder
  ];
  public static function bind($key, $value) {
    static::$registry[$key]= $value;
  }  

  public static function get($key) {
    if (! array_key_exists($key, static::$registry)) {
      throw new Exception("No {$key} is bound in the container.");
    }
    return static::$registry[$key];
  }
}