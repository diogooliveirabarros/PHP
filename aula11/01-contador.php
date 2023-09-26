<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title> Título </title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>

<body>
<div>
    <table>
        <td>
            <?php // Contagem de 1 até 10
            $c = 1;
            while ($c <= 10) {
                echo $c . "<br/>";
                $c++;
            }
            ?>
        </td>
        <td>
            <?php // Contagem de 10 até 1
            $c = 10;
            while ($c >= 1) {
                echo $c . "<br/>";
                $c--;
            }
            ?>
        </td>
        <td>
            <?php // Contagem de 1 até 10 de 2 em 2
            $c = 1;
            while ($c <= 10) {
                echo $c . "<br/>";
                $c += 2;
            }
            ?>
        </td>
        <td>
            <?php // Contagem de 10 até 1 de 2 em 2
            $c = 10;
            while ($c >= 1) {
                echo $c . "<br/>";
                $c -= 2;
            }
            ?>
        </td>
    </table>
</div>
</body>

</html>
