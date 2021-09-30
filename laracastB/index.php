<?php 


$query = require 'core/bootstrap.php';


$router = new Router;

//so routes.php can have access to $router object to assign routes
require 'routes.php';

//now we load the controller associated with the uri
//it's a more complex way of saying
//require 'controllers/about-culture.php';

//var_dump(trim($_SERVER['REQUEST_URI'], '/'));
$uri = trim($_SERVER['REQUEST_URI'], '/');


require $router->direct($uri);