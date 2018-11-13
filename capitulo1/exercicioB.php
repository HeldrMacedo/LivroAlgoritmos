<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exercicio B</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form  method="POST" accept-charset="utf-8">
		Digite a temperatura em Fahrenheit:<br/>
		<input type="text" name="f" /><br/><br/>
		<input type="submit" value="Calcular" />
	</form>

	<?php
		//Conveter temperatura de Fahrenheit para  Celsius
		//Recebe o valor da temperatura em Fahrenheit 
		$F = $_POST['f'];
		//Converte para Celsius
		$C = (($F - 32) * 5) / 9;

		//Saída
		echo "Temperatura em Celsius: ".$C;


	?>
</body>
</html>