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
    $v = array(3=>5, 1=>9, 0=>8, 7=>7);
    unset($v[0]); //UNSET serve para apagar tal vetor em tal posição, no caso apaguei o da posição 0.
    var_dump($v);
    ?>
</div>
</body>

</html>
