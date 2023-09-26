<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Título </title>
</head>

<body>
<div>
    <?php //SUBSTR recorta um pedaço da frase em determinada posição.
    $site = "Curso em Vídeo";
    $sub = substr($site,0,5); //Indica a posição inicial e a final, pode colocar apenas um valor, pegará a partir do valor informado o resto de toda frase.
    echo "$sub";
    ?>
</div>
</body>

</html>
