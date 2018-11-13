<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>exercicio A</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form  method="POST" accept-charset="utf-8">
		Digite a temperatura em Celsius:<br />
		<input type="text" name="celsius" /><br /><br />
		<input type="submit" value="calcular" />
	</form>
	<?php
		//Conveter temperatura de Celsius para Fahrenheit
		//recebe a temperatura
		$C = $_POST['celsius'];
		//processamento
		$F = (9 * $C + 160) / 5;

		echo "Temperatura em Fahrenheit ".$F;
	?>
</body>
</html>