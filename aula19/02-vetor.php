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
    $v = array("A", "J", "M", "X", "K");
    var_dump($v);
    array_push($v, "O"); //Adiciona o elemento 7 na ultima posição do vetor.
    var_dump($v);
    array_pop($v); //Elimina o ultimo componente do vetor.
    var_dump($v);
    ?>
</div>
</body>

</html>
