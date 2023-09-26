<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>

<body>
<div>
    <?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "A raiz de $valor é igual a " . number_format($rq,2);
    ?>
    <br/> <br/>
    <a href="01exercicio.html">Voltar</a>
</div>
</body

</html>
