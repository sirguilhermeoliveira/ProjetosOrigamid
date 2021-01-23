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
$produtos = [
  [
    'nome' => 'Camisa Preta',
    'preco' => 'R$ 49'
  ],
  [
    'nome' => 'Bermuda Branca',
    'preco' => 'R$ 99'
  ],
  [
    'nome' => 'Casaco Branco',
    'preco' => 'R$ 199'
  ]
];

$vitalicio = false;
if($vitalicio) {
  echo "Liberar";
}

$categorias = ['TEste'];

if(!empty($categorias)) :
  echo "Está cheio";
endif;

$preco = 90;

$mensagem = $preco > 100 ? 'Caro' : 'Barato';

echo $mensagem;

?>
</pre>

<?php foreach($produtos as $key => $produto) { ?>
  <?php foreach($produto as $key => $value) { ?>
    <h1><?= $key . ' ' . $value; ?></h1>
  <?php } ?>
<?php } ?>

</body>
</html>

