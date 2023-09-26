<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Título </title>
</head>

<body>
<div>
    <?php //STRPOS procura a posição de tal palavra em uma frase.
    $frase = "Estou aprendendo PHP";
    $pos = strpos($frase, "PHP"); //A palavra a ser localizada é PHP
    echo "A string foi localizada na posição $pos";
    ?>
</div>
</body>

</html>
