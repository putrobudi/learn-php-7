<?php

// $routes = [
//   '' => 'controllers/index.php',
//   'about' => 'controllers/about.php',
//   'about/culture' => 'controllers/about-culture.php',
//   'contact' => 'controllers/contact.php'
// ];

$router->define([
  '' => 'controllers/index.php',
  'about' => 'controllers/about.php',
  'about/culture' => 'controllers/about-culture.php',
  'contact' => 'controllers/contact.php'
]);

// Or define it like this
// $router->define('', 'controllers/index.php');
// Route::get('about', 'controllers/about.php');