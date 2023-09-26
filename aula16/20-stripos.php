<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Título </title>
</head>

<body>
<div>
    <?php //STRIPOS procura a posição de tal palavra independente se ela for escrita em maiuscula ou minuscula em uma frase.
    $frase = "Estou aprendendo PHP";
    $pos = stripos($frase, "php"); //A palavra a ser localizada é php, embora está em minuscula.
    echo "A string foi localizada na posição $pos";
    ?>
</div>
</body>

</html>
