<!--Curso de PHP-->
<!--Método GET-->
<?php  

	//EJEMPLO GET.
	if ($_GET) {
		$nombre = $_GET["txtNombre"];
		echo "Hola, " . $nombre;
	}

?>