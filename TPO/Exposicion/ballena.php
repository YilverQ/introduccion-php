<?php 
	include_once "animal.php";
	/*Clase de Ballena*/
	Class Ballena extends Animal
	{
		public function presentarse()
		{
			return "Hola, soy una ballena";
		}

		public function comunicarse()
		{
			return "burbujeo";
		}

		public function moverse()
		{
			return "nado";
		}
	}
?>