<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Título </title>
</head>

<body>
<div>
    <?php //STR_WORD_COUNT diz quantas palavras existem em tal frase.
    $frase = "Eu vou estudar PHP";
    $cont = str_word_count($frase,0); //O 0 ele contará apenas as frases, se colocar 1 ele gera um vetor que vc precisa colocar para exibir com o var_dump(), ou usar o 2 que cria um vetor indicando o inicio de cada frase no determinado vetor.
    echo "Sua frase contém $cont palavras";

    $frase1 = "Eu vou estudar PHP";
    $cont = str_word_count($frase1,1); //O 0 ele contará apenas as frases, se colocar 1 ele gera um vetor que vc precisa colocar para exibir com o var_dump(), ou usar o 2 que cria um vetor indicando o inicio de cada frase no determinado vetor.
    echo(var_dump($cont));
    ?>
</div>
</body>

</html>
