<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Título </title>
</head>

<body>
<div>
    <?php //STR_SPLIT é muito parecido com o EXPLODE, embora em vez de separar frases no vetor por palavras, ele pega as letras e transforma cada uma em vetor.
    $site = "Curso em Video";
    $vetor = str_split($site);
    print_r($vetor);
    ?>
</div>
</body>

</html>
