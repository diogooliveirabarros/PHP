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
    $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $i = date("Y") - $a; //O Y maiúsculo representa os 4 digítos do ano, ex: 1994.
        echo "Você nasceu em $a e tem $i anos <br/>";
    if ($i >= 18) {
        $v = "já pode votar";
        $d = "já pode dirigir";
    }
    else {
        $v = "não pode votar";
        $d = "não pode dirigir";
    }
    echo "Com essa idade você $v e também $d";
    ?>
</div>
</body>

</html>
