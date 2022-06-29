<?php 

	/*Clase Teléfono*/
	class Telefono
	{
		private $modelo;
		private $color;
		private $company;

		function __construct($modelo, $color, $company)
		{
			$this->modelo = $modelo;
			$this->color = $color;
			$this->company = $company;
		}

		function llamar()
		{
			return "Estoy llamando a otro teléfono";
		}

		function sms()
		{
			return "Estoy envíando un mensaje a otro teléfono";
		}

		function info_telefono()
		{
			$texto = "Modelo: {$this->modelo} <br>";
			$texto = $texto . "Color: {$this->color} <br>";
			$texto = $texto . "Compañía: {$this->company} <br>";
			return $texto;
		}
	}

	//Objetos de Teléfono
	$xiaomi = new Telefono("Xiaomi", "Blanco", "Digitel");
	$alcatel = new Telefono("Alcatel X1", "Negro", "Movistar");

	echo $xiaomi->info_telefono() . "<br>";
	echo $xiaomi->llamar() . "<br>";
	echo $xiaomi->sms() . "<br>";
	echo "<br><br>";

	echo $alcatel->info_telefono() . "<br>";
	echo $alcatel->llamar() . "<br>";
	echo $alcatel->sms() . "<br>";
?>