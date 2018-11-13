<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exercicio C</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post" accept-charset="utf-8">
		Digite a altura da lata de óleo:<br/>
		<input type="text" name="altura" /><br/>
		Digite o Raio:<br/>
		<input type="text" name="raio" /><br/><br/>
		<input type="submit" value="Calcular" />
	</form>
	<?php  
		//Calcular o volume de uma lata de óleo
		$altura = $_POST['altura'];
		$raio = $_POST['raio'];

		$volume = 3.14159 * pow($raio,2) * $altura;

		echo 'Volume da lata de óleo: '.$volume;
	?>
</body>
</html>