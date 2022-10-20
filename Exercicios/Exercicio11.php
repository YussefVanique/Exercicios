<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Exercício 11 - TRIÂNGULO</title>
</head>
<body>
    <form action="Exercicio11.php" method="GET">
        <label>LADO 1</label>
        <input type="number" name="lado1" /><br />
        <label>LADO 2</label>
        <input type="number" name="lado2" /><br />
        <label>LADO 3</label>
        <input type="number" name="lado3" /><br />
        <button type="submit">RESULTADO</button>
    </form> 
    <?php 
        $a = @$_REQUEST["lado1"];
        $b = @$_REQUEST["lado2"];
        $c = @$_REQUEST["lado3"];

        if( ($a+$b>$c)&&($a+$c>$b)&&($b+$c>$a) ){
        if($a==$b && $b==$c)
        echo "Triângulo equilátero";
        elseif ($a==$b || $a==$c || $b==$c)
        echo "Triângulo isósceles";
        else
        echo "Triângulo escaleno";
        }else
        echo "Não pode ser um Triângulo";
    ?>
</body>
</html>
