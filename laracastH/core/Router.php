<?php 


class Router {

  //protected $routes = []; 
  protected $routes = [
    'GET' => [],
    'POST' => []
  ]; 

  //static is not an instance method
  //it's a global method
  public static function load($file) {
    
    //this is like $router = new Router;
    $router = new static;
    // routes.php is loaded here.
    require $file;

    //return object so you can chain $router->load
    //with $router->direct
    
    //not return $this but,
    return $router;
  }

  // no longer needed
  // public function define($routes) {
  //   $this->routes = $routes;
  // }
  public function get($uri, $controller) {
    // breakdown:
    // $getRoutes = []; 
    // $getRoutes[] = 'foo';
    // $getRoutes[] = 'bar';
    // $getRoutes['uri'] = 'baz';

    // [
    //   0 => 'foo',
    //   1 => 'bar',
    //   'uri' => 'baz'
    // ]
    // We are doing something like this
    // $getRoutes['names'] = 'controllers/foo.php';
    $this->routes['GET'][$uri] = $controller;
  }

  public function post($uri, $controller) {
    $this->routes['POST'][$uri] = $controller;
  }

  //now we add $requestType parameter
  public function direct($uri, $requestType) {
    
    //die(var_dump($uri, $requestType));
    // before it was $this->routes
    // now we're checking $this->routes['POST'] or $this->routes['GET']
    if (array_key_exists($uri, $this->routes[$requestType])) {
      // return $this->routes['about/culture'];
      // return $this->routes[$uri];
      // return $this->routes[$requestType][$uri];
      // PagesController@home
      return $this->callAction(
        //splat operator turns array into a list of function arguments.
        ...explode('@', $this->routes[$requestType][$uri])
      );
    }

    throw new Exception('No route defined for this URI.'); 
  }

  protected function callAction($controller, $action) {
    //die(var_dump($controller, $action));
    $controller = new $controller;
    if (! method_exists($controller, $action)) {
      throw new Exception(
        "{$controller} does not respond to the {$action} action."
      );
    }
    //return (new $controller)->$action();
    return $controller->$action();
  }

}