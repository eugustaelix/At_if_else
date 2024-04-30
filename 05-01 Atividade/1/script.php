<?php

$temperatura = $_POST['temperatura'];

if ($temperatura < 0) {
    $resultado = "Está Congelante!";
    $cor = 'blue';
} elseif ($temperatura >= 0 && $temperatura < 15) {
    $resultado =  "Está Muito Frio!";
    $cor = 'lightblue';
} elseif ($temperatura >= 15 && $temperatura < 25) {
    $resultado =  "A temperaturaratura Está Razoável";
    $cor = 'yellow';
} elseif ($temperatura >= 25) {
    $resultado =  "Está Calor!";
    $cor = 'red';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="imagex/png" href="icon.ico" />
    <link rel="stylesheet" type="text/css" href="1.css" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resultado - Exercício 1 | PWII</title>
</head>

<body style="background-color:<?php echo $cor ?>;">
    <div>
        <label style="font-size: 70px;"><?php echo "$resultado"; ?></label>
        <br>
        <button style="background: black;" onclick="location.href='index.html'">Retornar</button>
    </div>
</body>

</html>