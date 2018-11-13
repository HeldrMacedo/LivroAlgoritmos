<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exemplo 3</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form  method="post" accept-charset="utf-8">
		Horas Trabalhadas:<br/>
		<input type="text" name="horas_trabalhadas" /><br/>
		Valor da hora aula:<br/>
		<input type="text" name="valor_da_hora_aula" /><br/>
		Percentual de desconto:<br/>
		<input type="text" name="percentual_desconto" /><br/><br/>
		<input type="submit" name="Calcular" />
	
	</form>

	<?php
		//calcular salário líquido
		//recebe os válores
		$horas_trabalhadas = $_POST['horas_trabalhadas'];
		$valor_da_hora_aula = $_POST['valor_da_hora_aula'];
		$percentual_desconto = $_POST['percentual_desconto'];
		//calculo / processamento
		$salario_bruto = $horas_trabalhadas * $valor_da_hora_aula;
		$total_desconto = ($percentual_desconto / 100) * $salario_bruto;

		$salario_liquido = $salario_bruto - $total_desconto;
		//saída
		echo "Salário liquido: "+ $salario_liquido;
		

	?>
</body>
</html>