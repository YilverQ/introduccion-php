<!--Curso de PHP-->
<!--Funciones-->
<?php  

	//Funciones
	function decirHola(){
		echo "Hola Mundo" . "<br>";
	}

	function imprimirNombre($nombre){
		echo "Hola, " . $nombre . "<br>"; 
	}

	function datosPersonales($nombre, $apellido, $edad){
		echo "Hola, Soy " . $nombre . " " . $apellido . " Y Tengo " . $edad . "<br>"; 
	}


	//llamar a las funciones.
	decirHola();
	imprimirNombre("Yilver");
	datosPersonales("Yilver", "Quevedo", 20);

?>