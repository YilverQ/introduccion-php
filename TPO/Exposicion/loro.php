<?php 
	include_once "animal.php";
	/*Clase de Loro*/
	Class Loro extends Animal
	{
		public function presentarse()
		{
			return "Hola, soy un loro";
		}

		public function comunicarse()
		{
			return "silbo";
		}

		public function moverse()
		{
			return "vuelo";
		}
	}
?>