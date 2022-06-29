<?php 
	
	#Se incluyen los archivos necesarios.
	include "model/MovieModel.php";
	include "controller/MovieController.php";

	#Se instancia la clase controlador.
	$controller = new MovieController();

	#Se ejecuta el método. 
	$controller->index();
?>