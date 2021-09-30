<?php

// $router->get('', 'App\Controllers\PagesController@home');
// $router->get('about', 'App\Controllers\PagesController@about');
// $router->get('contact', 'App\Controllers\PagesController@contact');
$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('about/culture', 'controllers/about-culture.php');

// responsible for rendering and displaying all of our users
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

// var_dump($router->routes);