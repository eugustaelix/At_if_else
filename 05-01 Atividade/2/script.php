<?php
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$imc = $peso / ($altura * $altura);
$resultado;

if ($imc < 18.5) {
  $resultado = "Abaixo do peso normal!";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
  $resultado = "Peso normal";
} elseif ($imc >= 25.0 && $imc <= 29.9) {
  $resultado = "Excesso de peso";
} elseif ($imc >= 30.0 && $imc <= 34.9) {
  $resultado = "Obesidade classe 1";
} elseif ($imc >= 35.0 && $imc <= 39.9) {
  $resultado = "Obesidade classe 2";
} elseif ($imc >= 40) {
  $resultado = "Obesidade classe 3";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <link rel="shortcut icon" type="imagex/png" href="icon.ico" />
  <link rel="stylesheet" type="text/css" href="2.css" media="screen" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Resultado - Exercício 2 | PWII</title>
</head>

<body>
  <div>
    <label style="font-size: 50px; padding: 10px;"><?php echo "$resultado"; ?></label>
  </div>
</body>

</html>