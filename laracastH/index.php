<?php 

require 'vendor/autoload.php';
require 'core/bootstrap.php';

// before we were returning this from Router::direct()
// require 'controllers/about-culture.php'
// but now we are returning the content inside PagesController method.
// So we omit the require. 
Router::load('routes.php')
  ->direct(Request::uri(), Request::method());


