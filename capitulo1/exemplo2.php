<!DOCTYPE html>
<html>
<head>
	<title>exemplo2</title>
</head>
<body>
	<form  method="post" accept-charset="utf-8">
		Raio<br/>		
		<input type="text" name="raio"/><br /><br />
		<input type="submit" value="Calcular" />
	</form>

	<?php
		//calculo para calcular a área de uma circuferência
		define('PI' , 3.14159265); 
		$raio = $_POST['raio'];
		$area = PI * ($raio * $raio);

		echo $area;

	?>
</body>
</html>