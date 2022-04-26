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
	require_once "personalData_Abstract.php";

	//Clase Abstracta "actionPersonal" es para ejecutar las acciones básicas de una persona dentro de un hospital.
	abstract class ActionPersonal extends PersonalData
	{
		//Método abstracto para conocer la información del objeto.
		abstract public function sleep();
		abstract public function eat();
		abstract public function toCure();
	}
?>