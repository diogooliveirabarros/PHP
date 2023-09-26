<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Título </title>
</head>

<body>
<div>
    <h5> Passagem por valor </h5>

    <?php
    function teste1 ($x) {
        $x += 2; //Isso é a mesma coisa que isto $x = $x + 2;
        echo "<p>O valor de X é $x</p>";
    }
    $a = 1;
    teste1($a);
    echo "<p>O valor de A é $a</p>";
    ?>

    <h5> Passagem por referência </h5>

    <?php
    function teste2 (&$x) {
        $x += 2; //Isso é a mesma coisa que isto $x = $x + 2;
        echo "<p>O valor de X é $x</p>";
    }
    $a = 1;
    teste2($a);
    echo "<p>O valor de A é $a</p>";
    ?>
</div>
</body>

</html>
