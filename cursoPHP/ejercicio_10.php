<!--Curso de PHP-->
<!--Arreglos-->
<?php  

	//Arreglos.
	$frutas = array("fresa", "manzana", "pera");
	$frutas_nacionales = array("mango", "melon", "lechoza");

	echo "<h3>Arreglos</h3>";
	print_r($frutas);
	echo "<br>";
	print_r($frutas_nacionales);


	//Arreglos asociativos.
	$usuario = array("nombre" => "Yilver", "apellido" => "Quevedo", "edad" => 20);
	$equipo = array("Venezuela" => "Caracas F.C", "Colombia" => "Junior F.C", "Argentina" => "River");

	echo "<h3>Arreglos asociativos</h3>";
	print_r($usuario);
	echo "<br>";
	print_r($equipo);


	//Leer arreglos.
	echo "<h3>Leer arreglos</h3>";
	for ($i=0; $i < 3; $i++) { 
		echo $frutas_nacionales[$i] . "<br>";
	}


	//Leer arreglos asociativos
	echo "<h3>Leer arreglos asociativos</h3>";
	foreach ($equipo as $key => $value) {
		echo "En el país: " . $key . " Está el equipo: " . $value . "<br>";
	}


	//Buscar las funciones más utilizadas para los arrays.
?>