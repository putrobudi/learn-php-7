<?php

// $routes = [
//   '' => 'controllers/index.php',
//   'about' => 'controllers/about.php',
//   'about/culture' => 'controllers/about-culture.php',
//   'contact' => 'controllers/contact.php'
// ];

// $router->define([
//   '' => 'controllers/index.php',
//   'about' => 'controllers/about.php',
//   'about/culture' => 'controllers/about-culture.php',
//   'contact' => 'controllers/contact.php',
//   'arrays' => 'controllers/arrays.php',
//   'names' => 'controllers/add-name.php' //only for POST types
// ]);

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('about/culture', 'controllers/about-culture.php');
// Now handled by users route.
// tested still using 'names' endpoint when already handled by UsersController
// And it throws too few arguments to Router::callAction
// That's because we're using explode to extract 'UsersController@index'
//$router->post('names', 'controllers/add-name.php');

// responsible for rendering and displaying all of our users
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

// var_dump($router->routes);