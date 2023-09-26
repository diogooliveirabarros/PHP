<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title> Título </title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>

<body>
<div>
    <form method="get" action="03-resposta.php">
        <?php
        Inicio: <input type="number" min="0" max="999999" value="$i"/> <br/>
        Final: <input type="number" min="0" max="999999" value="$f"/> <br/>
        Inclemento: <select>
            <option> 1 </option>
            <option> 2 </option>
            <option> 3 </option>
            <option> 4 </option>
            <option> 5 </option>
        </select>

        $inicio = $i;
        $fim = $f;
        for ($inicio >= $fim) {
            echo

        }
        ?>
<br/>
        <input type="submit" Value="Enviar" class="botao"/>

    </form>
</div>
</body>

</html>
