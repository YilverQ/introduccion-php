<?php 
	include_once "animal.php";
	/*Clase de Perro*/
	Class Perro extends Animal
	{
		public function presentarse()
		{
			return "Hola, soy un perro";
		}

		public function comunicarse()
		{
			return "Ladro";
		}

		public function moverse()
		{
			return "camino";
		}
	}
?>