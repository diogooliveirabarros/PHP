<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Título </title>
</head>

<body>
<div>
    <?php //PRINT_R é uma forma para visualizações de Vetores(Arrays), a mais agradável que achei foi a var_dump().
    $v[0] = 4;
    $v[1] = 8;
    $v[2] = 3;
    //print_r($v); Usa-se também var_dump() ou var_export()
    $v2 = array (3,7,6,2,1,9);
    var_dump($v2);
    ?>
</div>
</body>

</html>
