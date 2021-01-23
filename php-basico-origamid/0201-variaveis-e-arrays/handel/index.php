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
$produto = [
  'nome' => 'Camiseta Preta',
  'preco' => 'R$ 49',
  'img' => [
    'src' => './img/image.png',
    'alt' => 'Camisa Preta',
  ]
];

$categorias = ['Camisetas'];
$categorias[] = 'Bermudas';
$categorias[] = 'Casacos';

$produto['estoque'] = '10 items';

unset($produto['preco']);

$totalProduto = array_keys($produto);

print_r($totalProduto);
?>
</pre>

<h1><?= $produto['nome']; ?></h1>
<p><?= $produto['preco']; ?></p>
<img src="<?= $produto['img']['src']; ?>" alt="<?= $produto['img']['alt']; ?>">

</body>
</html>

