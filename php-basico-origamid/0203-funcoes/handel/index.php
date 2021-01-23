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
function formulario_contato() {
  return '<form>
    <input type="text" name="" id="">
    <input type="button" value="Enviar">
  </form>';
}

function valor_final($valor, $moeda = 'R$ ') {
  return $moeda . $valor;
}

echo valor_final(100);
echo '<br>';
echo valor_final(100, '$');
?>

</body>
</html>