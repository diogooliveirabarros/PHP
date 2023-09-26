<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Título </title>
</head>

<body>
<div>
    <?php //SUBSTR_COUNT encontra e indica quantas vezes a palavra escolhida foi encontrada na frase.
    $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
    $cont = substr_count($frase, "PHP"); //A palavra a ser localizada é PHP
    echo "PHP encontrado $cont vezes";
    ?>
</div>
</body>

</html>
