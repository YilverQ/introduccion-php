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

	/*Clase de Paciente*/
	/*
		nombre y apellido.
		edad
		---------------------
		llorar()
		sanarse()
	*/
		Class Paciente
		{
			private $nombre;
			private $apellido;
			private $edad;

			function __construct($nombre, $apellido, $edad)
			{
				$this->nombre = $nombre;
				$this->apellido = $apellido;
				$this->edad = $edad;
			}

			function llorar()
			{
				return "El paciente agoniza de dolor, requiere atención.";
			}

			function sanarse()
			{
				return "El paciente se ha sanado.";
			}

			function info_paciente()
			{
				$texto = "Nombre: {$this->nombre} <br>";
				$texto = $texto . "Apellido: {$this->apellido} <br>";
				$texto = $texto . "Edad: {$this->edad} <br>";
				return $texto; 
			}
		}
?>