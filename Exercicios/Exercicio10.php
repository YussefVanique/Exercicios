<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Exercício 10 - NOTAS</title>
</head>
<body>
    <form action="Exercicio10.php" method="GET">
        <label>NOTA 1</label>
        <input type="text" name="nota1" /><br />
        <label>NOTA 2</label>
        <input type="text" name="nota2" /><br />
        <button type="submit">Calcular Média</button>
    </form> 
    <?php 
        $nota1 = @$_GET["nota1"];
        $nota2 = @$_GET["nota2"];
        $media = ($nota1 + $nota2)/2;

        echo "Média: $media <br/>";
        if($media<6)
        echo "Reprovado";
        elseif($media==10)
        echo "Aprovado com Distinção";
        else
        echo "Aprovado";
    ?>
</body>
</html>