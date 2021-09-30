<?php 

//This class responsible to fetching current
//URI requests.

class Request {

  public static function uri() {
    
    return trim($_SERVER['REQUEST_URI'], '/');

  }

}