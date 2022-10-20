<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercício 5 - TABUADA</title>
    </head>
    <body>
        <form action="Exercicios.php" method="GET">
            <label>VALOR 1</label>
            <input type="number" name="a">
            <select name="operador">
                <option value="1"> + </option>
                <option value="2"> - </option>
                <option value="3"> * </option>
                <option value="4"> / </option>
            </select>
            <label>VALOR 2</label>
            <input type="number" name="b">
            <button type="submit">Calcular</button>
        </form>
        <?php
            $a    = @$_REQUEST["a"];
            $b    = @$_REQUEST["b"];
            $oper = @$_REQUEST["operador"];

            
            switch ($oper) {
                case 1:
                    $resultado = $a + $b;
                    break;
                case 2:
                    $resultado = $a - $b;
                    break;
                case 3:
                    $resultado = $a * $b;
                    break;
                case 4:
                    $resultado = $a / $b;
                    break;
            }

            print $resultado;
        ?>
    </body>
</html>