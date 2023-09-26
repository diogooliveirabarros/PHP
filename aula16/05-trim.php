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
    //TRIM é usada para ignorar espaços que o usuário digitou antes e depois de por exemplo seu Nome(   DiogoxOliveiraxBarros   ).
    //LTRIM é usada da mesma forma do TRIM embora só irá ignorar os espaços do início.
    //RTRIM é usada da mesma forma do TRIM embora só irá ignorar os espaços do final.

    $nome = "   Diogo Oliveira Barros   ";
    echo "Tamanho do meu nome antes de usar o trim para ignorar os espaços é igual a ".(strlen($nome));

    $trim = trim($nome);
    echo "</br> </br>".($trim);

    echo "</br> </br>" . "Tamanho depois de usar o trim ignorando os espaços em brancos é igual a ".(strlen($trim));
    ?>
</div>
</body>

</html>
