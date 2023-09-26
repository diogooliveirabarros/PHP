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
    $v = array(1, 8, 7, 10, 4);
    var_dump($v);
    echo "Ordem Crescente";
    sort($v); //Deixa em ordem crescente.
    var_dump($v);
    echo "Ordem Decrescente";
    rsort($v); //Deixa em ordem decrescente.
    var_dump($v);
    echo "Ordem Crescente de forma Associativa";
    asort($v); //Deixa os valores em ordem crescente, porém o índice tb irá se mexer.
    var_dump($v);
    echo "Ordem Decrescente de forma Associativa";
    arsort($v); //Deixa os valores em ordem decrescente, porém o índice tb irá se mexer.
    var_dump($v);
    echo "Organiza apenas os índices de forma crescente";
    ksort($v); //Deixa os índices em ordem crescente e organizada.
    var_dump($v);
    echo "Organiza apenas os índices de forma decrescente";
    krsort($v); //Deixa os índices em ordem decrescente e organizada.
    var_dump($v);
    ?>
</div>
</body>

</html>
