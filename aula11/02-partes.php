<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title> Título </title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>

<body>
<div>
    <form method="get" action="02-parte2.php">
        <?php
        $c = 1;
        while ($c <= 5) {
            echo "Valor $c: <input type = 'number' name = 'v$c' max = '100' min = '1' value = '0'/> <br/>";
            $c++;
        }
        ?>
        <input type="submit" value="Enviar" class="botao"/>
    </form>
</div>
</body>

</html>
