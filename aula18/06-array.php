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
    $m = array(array(6,4), array(4,9), array(3,2));
    // (Linhas) 0 - 6,4
    //          1 - 4,9
    //          2 - 3,2
    //              0-1 (Colunas)
    $m[0][1] = $m[2][0];
    var_dump($m);
    ?>
</div>
</body>

</html>
