<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Exercício 08 </title>
</head>

<body>
<div>
    <?php
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não Informado]"; /* isset significa "SE" foi configurado */ /* Se o parâmetro nome foi configurado exiba ele mesmo, se não exiba Não Informado */
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem Sexo]";

    $idade = date("Y") - $ano; //Função que pega a data atual do sistema (Y:Pega o formato inteiro,ex: 2016 / y:Pega o formato com dois dígitos,ex: 16)
    echo "$nome é $sexo e tem $idade anos.";
    ?>
    <br/> <br/>
    <a href="02exercicio.html"> Voltar </a>
</div>
</body>

</html>
