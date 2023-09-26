<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> Título </title>
</head>

<body>
<div>
    <table border="1"> <tr>
    <?php
    $c = range(5,20,2); //O 5 é o primeiro elemento do vetor, o 20 é o ultimo, e o 2 do final é de quanto em quanto ele irá pular de número
    foreach($c as $v){
        echo "<td> $v ";
    }
    ?>
    </table>
</div>
</body>

</html>
