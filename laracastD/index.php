<?php 


require 'core/bootstrap.php';


/* $router = new Router;

//so routes.php can have access to $router object to asssign routes
require 'routes.php';


//var_dump(trim($_SERVER['REQUEST_URI'], '/'));
$uri = trim($_SERVER['REQUEST_URI'], '/');

// //now we load the controller associated with the uri
// //it's a more complex way of saying
// //require 'controllers/about-culture.php';
require $router->direct($uri); */

//move this to Request.php
//$uri = trim($_SERVER['REQUEST_URI'], '/');

// $router = Router::load('routes.php');

// require $router->direct($uri);

//die(var_dump($app));

require Router::load('routes.php')
  ->direct(Request::uri());
