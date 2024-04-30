<?php
$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$situacao;
$media = ($nota1 + $nota2 + $nota3) / 3;
$media = number_format($media, 2, '.', ''); // Talvez remover isso
if ($media >= 7) {
  $situacao = "Aprovado";
} else {
  $situacao = "Reprovado";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <link rel="shortcut icon" type="imagex/png" href="icon.ico" />
  <link rel="stylesheet" type="text/css" href="3.css" media="screen" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Resultado - Exercício 3 | PWII</title>
</head>

<body>
  <div>
    <label style="font-size: 30px;">Nome: <?php echo "$nome"; ?></label>
    <br />
    <label style="font-size: 30px;">Média: <?php echo "$media"; ?></label>
    <br />
    <label style="font-size: 30px;">Situação: <?php echo "$situacao"; ?></label>
    <br />
    <button onclick="location.href='index.html'">Retornar</button>
  </div>
</body>

</html>