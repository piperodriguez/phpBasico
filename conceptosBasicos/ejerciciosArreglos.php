<?php

	$arreglo = [
		'keyStr1' => 'lado',
		0 => 'ledo',
		'keyStr2' => 'lido',
		1 => 'lodo',
		2 => 'ludo'

	];

	echo "<pre>";

	$solucion = $arreglo["keyStr1"].' '.$arreglo[0].' '.$arreglo["keyStr2"].' '.$arreglo[1].' '.$arreglo[2];

	$solucion .= "<br>decirlo al reves lo dudo<br>";

	$solucion .= "Ludo" .' '.$arreglo[1].' '.$arreglo["keyStr2"].' '.$arreglo[0].' '.$arreglo["keyStr1"];

	$solucion .= "<br>¡Qué trabajo me ha costado!";

	echo "<h2>Ejercicio 1:</h2><br>";
	echo $solucion;


	$arrPaises = [
		'Colombia' => ['Bogota','Medellin','Tunja'],
		'Italia' => ['Roma','Milan','Sorento']
	];

	echo "<br><h2>Ejercicio 2:</h2>";



	foreach ($arrPaises as $listaPaises => $listaCiudades) {
		
		echo $listaPaises." :";

		foreach ($listaCiudades as $ciudad) {
			
			echo $ciudad." ";
		}

		echo "<br>";
	}


	echo "<br><h2>Ejercicio 3</h2><br>";

	$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61,101];

	sort($valores);

	echo "los 3 numeros menores son: $valores[0], $valores[1] ,$valores[2]";

	rsort($valores);

	echo "<br>los 3 numeros mayores son: $valores[0], $valores[1] ,$valores[2]";

?>
