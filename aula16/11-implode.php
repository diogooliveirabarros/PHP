<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Título </title>
</head>

<body>
<div>
    <?php //IMPLODE ou JOIN é o inverso da explode, ele pega o vetor já formado e faz a frase.
    $vetor[0] = "Curso";
    $vetor[1] = "em";
    $vetor[2] = "Vídeo";
    $texto = implode(" ", $vetor); //Pode tirar a palavra IMPLODE e colocar JOIN().
    echo $texto;
    ?>
</div>
</body>

</html>
