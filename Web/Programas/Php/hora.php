<html>
	<head><title>Ejercicio PHP</title></head>
<body>

	<?php 
		echo date('h:m')."<br>";
		if ( date('h') > 20 || date('h') < 4) {
			echo "Buenas noches";
		}
		else
		{
			echo "Buenos dias";
		}
	 ?>
</body>
</html>