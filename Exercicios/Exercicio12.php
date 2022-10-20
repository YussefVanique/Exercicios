<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercício 12 - ANO</title>
</head>
<body>
	<form action="Exercicio12.php" method="GET">
	 	<label>Digite o Ano</label>
	 	<input type="number" name="ano">
	 	<button type="submit">Resultado</button>
	</form>
	<?php
		$ano = @$_GET["ano"];
		if (($ano % 4 == 0) && ($ano % 100 != 0 || $ano %400 == 0)) {
	    echo "$ano é bissexto";
		} else{
	    echo "$ano não é bissexto";
		}
	?>
</body>
</html>