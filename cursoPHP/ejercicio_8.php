<!--Curso de PHP-->
<!--Ciclos-->
<?php  

	//ciclos for.
	for ($numeroInicial = 0; $numeroInicial<=10; $numeroInicial++){
		echo "Numero: " . $numeroInicial . "<br>";
	}


	//ciclos do while.
	echo "<br><br>";
	$numero = 0;
	do {
		echo "Numero: " . $numero . "<br>";
		$numero += 2;
	} while ($numero <=10);


	//ciclo while.
	echo "<br><br>";
	$numero = 0;
	while ($numero <= 12) {
		echo "Numero: " . $numero . "<br>";
		$numero += 3;
	}
?>