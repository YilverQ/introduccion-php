<?php 

	/*Ejemplo de la clase Persona*/
	Class Persona
	{
		private $firstName;
		private $secondName;

		function __construct($firstName, $secondName)
		{
			$this->firstName = $firstName;
			$this->secondName = $secondName;
		}

		function fullname()
		{
			return $this->firstName . " " . $this->secondName;
		}
	}

	$persona1 = new Persona("Yilver", "Quevedo");
	$persona2 = new Persona("Jesus", "Gil");

	echo "{$persona1->fullname()} es amigo de {$persona2->fullname()}";
?>