<?php 
	
	//Informacion de Estudiante
	/*
		Yilver Quevedo
		28.333.459
		yilver0906@gmail.com
		Topicos de programción orientado a objetos.
	*/
?>

<?php 

	//Clase "Maintenance" para dar mantenimiento a la infraestructura y obtener suministros.  
	abstract class Maintenance
	{
		abstract public function toGiveMaintenance(); //Da el mantenimiento del edificio.
		abstract public function getSupply(); //obtener suministros.
	}
?>