<!DOCTYPE html>
<html>
<head>
	<title>exemplo1</title>
</head>
<body>
	<form  method="post" accept-charset="utf-8">
		Numero 1:<br/>		
		<input type="text" name="num1"/><br />
		Numero 2:<br/>
		<input type="text" name="num2" /><br/><br/>
		<input type="submit" value="Somar" />
	</form>
	<?php 
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];

		$resultado = $num1 + $num2;

		echo $resultado;

	?>
</body>
</html>