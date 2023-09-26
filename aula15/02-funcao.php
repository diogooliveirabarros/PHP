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
    // INCLUDE: Quer dizer INCLUIR, ele vai incluir um novo arquivos, mesmo se não for encontrado o arquivo o programa continuará rodando de boa
    // REQUIRE: Quer dizer REQUERIR, ele vai obrigar que aquele arquivo exista, se não for encontrado aparecerá um erro fatal.
    include "funcoes.php";
    echo "<h1> Testando novas funções </h1>";
    ola();
    mostraValor(4);
    echo "<h2> Finalizando Programa... </h2>"
    ?>
</div>
</body>

</html>
