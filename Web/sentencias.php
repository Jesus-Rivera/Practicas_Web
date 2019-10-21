<?php 
	echo "<h2>Foreach</h2><br>";
	$Arreglo = [
		'Indice_1' => 'Valor del indice 1',
		'Indice_2' => 'Valor del indice 2',
		'Indice_3' => 'Valor del indice 3',
	];
	foreach ($Arreglo as $key => $value) {
		echo $key." => ".$value."<br>";
	}
	echo "<br>Tabla del 2<br>";
	foreach (array(1,2,3,4,5,6,7,8,9,10) as $valor) {
	    $valor = $valor * 2;
		echo $valor."<br>";
	}
	echo "<br>";
	$a = array(
	    "Primero" => 1,
	    "Segundo" => 2,
	    "Tercero" => 3,
	    "Cuarto" => 4
	);

	foreach ($a as $k => $v) {
	    echo "\$a[$k] => $v.\n";
	}


	echo "<h2>While</h2><br>";
	$i = 1;
	$cadena = "";
	while ($i <= 10) {
	    $cadena = $cadena.$i++." - ";
	}
	echo substr($cadena, 0, -3);
	
	echo "<br>";
	$i = 0;
	while ($i <= 3) {	
		echo ".<br>";
		$i = $i + 1;
	}

	$a = 3;
	$b = 5;

	$uno = array("10", "20", "30", "40");
	$dos = array("a", "b", "c", "d");

	$i=0;
	while($i < count($uno)) {
	   reset($dos);
	   while($a = each($dos)) {
	       echo $a[1]." - ".$uno[$i].", ";
	   }
	   $i++;
	  
	}


	echo "<h2>Elseif</h2><br>";


	if ($a == $b) {
		echo "A es igual a B";
	}elseif ($a > $b) {
		echo "A es mayor a B";
	}elseif ($a < $b) {
		echo "A es menor a B";
	}

 ?>