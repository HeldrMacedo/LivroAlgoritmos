<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exercicio D</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post" accept-charset="utf-8">
		Digite o tempo gasto com a viagem<br/>
		<input type="text" name="tempo" /><br/>
		Digite a velocidade média:<br/>
		<input type="text" name="velocidade" /><br/>
		Quantidade de litros por quilômetro:<br/>
		<input type="text" name="qtd_litros" /><br/><br/>
		<input type="submit" value="Calcular" />
	</form>
	<?php 
		//Calcular o consumo de gasolina com um automóvel que consome 12 litros por quilômetro
		$tempo = $_POST['tempo'];
		$velocidade = $_POST['velocidade'];
		$qtd_litros = $_POST['qtd_litros'];

		$distancia = $tempo * $velocidade;
		$litros_usados = $distancia / $qtd_litros;

		echo 'Quantide de litros usados: '.$litros_usados;
	?>
</body>
</html>