<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<?php

class Produto {
  public $preco = 14900;

  public function nome() {
    return 'Camisa Preta';
  }

  public function preco_final() {
    return 'R$ ' . $this->preco / 100;
  }
}

$camisa = new Produto();

// echo $camisa->nome();
// echo $camisa->preco_final();
// echo $camisa->preco;

// print_r(get_class_methods('Produto'));
?>

<pre>
<?php
function puxarPaginas() {
  return new WP_Query([
    'post_type' => 'product',
  ]);
}

$query = puxarPaginas();

?>

<?php foreach($query->posts as $post) { ?>
  <h1><?= $post->post_title; ?></h1>
  <h1><?= $post->ID; ?></h1>
<?php } ?>

<?php

$camisa = wc_get_product(10);

// print_r($camisa);

echo $camisa->get_price();
echo $camisa->get_name();
echo $camisa->get_type();
?>

<h1><?= $camisa->get_name(); ?></h1>
<p><?= $camisa->get_price(); ?></p>

</body>
</html>