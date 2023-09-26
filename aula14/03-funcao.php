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
    function soma() {
        $p = func_get_args(); //Pega todos os parâmetros
        $t = func_num_args(); //Pega o número de parâmetros
        $s = 0;
        for($i=0; $i < $t; $i++) {
            $s = $s + $p[$i];
        }
        return $s;
    }

    $r = soma(3,5,2);
    echo "A soma dos valores é $r";
    ?>
</div>
</body>

</html>
