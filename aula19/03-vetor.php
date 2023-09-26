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
    array_unshift($v, "O"); //Adiciona o elemento O na primeira posição do vetor.
    var_dump($v);
    array_shift($v); //Elimina o primeiro componente do vetor.
    var_dump($v);
    ?>
</div>
</body>

</html>
