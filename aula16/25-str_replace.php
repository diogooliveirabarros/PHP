<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Título </title>
</head>

<body>
<div>
    <?php //STR_REPLACE substitui as palavras
    $frase = "Gosto de estudar Matemática";
    $novafrase = str_replace("Matemática","PHP", $frase); //Substitui a palavra Matemática por PHP //Para ignorar letras maiusculas ou minuscula usa str_ireplace()
    echo "$novafrase";
    ?>
</div>
</body>

</html>
