<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Título </title>
</head>

<body>
<div>
    <?php
    $nota01 = $_GET["nota1"];
    $nota02 = $_GET["nota2"];
    $media = ($nota01 + $nota02) / 2;
    if ($media >= 0 && $media < 5) {
        $media = "REPROVADO";
    }
    elseif ($media >= 5 && $media <=7) {
        $media = "RECUPERAÇÃO";
    }
    elseif ($media > 7) {
        $media = "APROVADO";
    }
    echo "Você está $media";
    ?>
</div>
</body>

</html>
