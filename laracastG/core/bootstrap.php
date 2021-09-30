<?php 
//Throw config.php into a box and put a config label on it.
//Dependency Injection Container
App::bind('config', require 'config.php');
// App::bind('config', $config = require 'config.php');
//Later I just have to look for config label and save it in variable.
//$config = App::get('config');
// App::bind('foo', 'bar');
// die(App::get('foo'));

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
  // Connection::make($config['database'])
));

// $app = []
// $app['config'] = require 'config.php';

// $app['database'] = new QueryBuilder(
//   Connection::make($app['config']['database'])
// );

// Why not something like this? I don't know...
// $app['database'] = QueryBuilder::instantiate(
//   Connection::make($app['config']['database'])
// );