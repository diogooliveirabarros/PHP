<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Título </title>
</head>

<body>
<div>
    <?php //EXPLODE é uma versão mais nova substituindo o str_word_count, onde criará um vetor de palavras.
    $site = "Curso em Video";
    $vetor = explode(" ",$site); //O espaço em branco indica que quando ele identificar esse espaço irá quebrar e saber o ínicio de cada palavra separada.
    print_r($vetor);
    ?>
</div>
</body>

</html>
