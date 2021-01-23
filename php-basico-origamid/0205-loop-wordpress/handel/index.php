<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<pre>
<?php
$wp_query_ = [
  [
    'titulo' => 'Primeiro Post',
  ],
  [ 
    'titulo' => 'Segundo Post',
  ]
];

function have_posts_() {
  global $wp_query_;
  return !empty($wp_query_);
}

function the_post_() {
  global $wp_query_;
  array_shift($wp_query_);
}

function the_title_() {
  global $wp_query_;
  echo $wp_query_[0]['titulo'];
}

if(have_posts_()) : while(have_posts_()) : ?>

<h1><?php the_title_(); ?></h1>

<?php the_post_(); endwhile; endif;

?>

</body>
</html>