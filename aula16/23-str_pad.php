<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Título </title>
</head>

<body>
<div>
    <?php //STR_PAD pega determinada palavra e dá quantos espaços quiser e sua localização.
    $nome = "Diogo";
    $novo = str_pad($nome,20," ",STR_PAD_LEFT);
    echo "$novo é lindo";
    ?>
</div>
</body>

</html>
