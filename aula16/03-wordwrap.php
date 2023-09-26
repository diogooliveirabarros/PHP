<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Título </title>
</head>

<body>
<div>
    <?php //WORDWRAP é uma forma para quebra de textos em determinadas colunas ou linhas que você quiser.
    $t = "Aqui tem um texto gigante criado por Diogo Oliveira e vai mostrar o funcionamento da função wordwrap";
    $r = wordwrap($t, 5, "</br>\n", true);
    //O 5 indica quantas letras vc quer deixar por linha, o </br> só é colocado para a quebra de linha ser visualmente, o \n para ser visualmente no código fonte tb, e por final se tiver false indica que ele não quebrará se a palavra tiver menos que 5 caracteres, já o true quebrará independetemente se a palavra tiver mais que 5 sílabas.
    echo "$r";
    ?>
</div>
</body>

</html>
