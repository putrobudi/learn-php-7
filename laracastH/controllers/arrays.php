<?php

class Post
{

  public $title;
  public $author;
  public $published;

  public function __construct($title, $author, $published)
  {
    $this->title = $title;
    $this->author = $author;
    $this->published = $published;
  }
}

$posts = [
  new Post('My First Post', 'PB', true),
  new Post('My Second Post', 'PB',  true),
  new Post('My Third Post', 'CJ', true),
  new Post('My Fourth Post', 'MB', false)
];
// $unpublishedPosts = array_filter($posts, function ($post) {
//   return !$post->published;
// });
// $publishedPosts = array_filter($posts, function ($post) {
//   return $post->published;
// });

// foreach ($posts as $post) {
//   $post->published = true;
// }

// $modified = array_map(function ($post) {
//   //return 'foobar';
//   $post->published = true;
//   return $post;
// }, $posts);

// $modified = array_map(function ($post) {
//     //return (array) $post;
//     return ['title' => $post->title];
  // maybe you want to wrap it to some other object 
  // maybe you have some post object and somebody else supplies that
  // but you want to use your own posts object because
  // it has extra functionality that you want.
  // return new SomeOtherObject($post->title);
// }, $posts);

// $titles = array_map(function ($post) {
//   return $post->title;
// }, $posts);

//$titles = array_column($posts, 'title');

// it's the same as the map function below
// foreach ($posts as $index => $post) {
//   $posts[$index] = (array) $post;
// }

$posts = array_map(function($post) {
  return (array) $post;
}, $posts);

$titles = array_column($posts, 'title');
$author = array_column($posts, 'author', 'title');

var_dump($author);


