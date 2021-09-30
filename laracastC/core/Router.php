<?php 


class Router {

  protected $routes = []; 

  //static is not an instance method
  //it's a global method
  public static function load($file) {
    
    //this is like $router = new Router;
    $router = new static;

    require $file;

    //return object so you can chain $router->load
    //with $router->direct
    
    //not return $this but,
    return $router;
  }

  public function define($routes) {
    $this->routes = $routes;
  }

  public function direct($uri) {
    
    // about/culture
    if (array_key_exists($uri, $this->routes)) {

      //return $this->routes['about/culture'];
      return $this->routes[$uri];

    }

    throw new Exception('No route defined for this URI.'); 
  }

}