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

	/*Clase de Hospital*/
	/*
		nombre
		ubicación
		nro_medicos		
		--------------------
		enviar_abulancia(parametro);
		recibir_ambulancia();
		info_hospital();
	*/

	Class Hospital
	{
		private $nombre;
		private $ubicacion;
		private $nro_medicos;

		function __construct($nombre, $ubicacion, $nro_medicos)
		{
			$this->nombre = $nombre;
			$this->ubicacion = $ubicacion;
			$this->nro_medicos = $nro_medicos;
		}

		function envia_ambulancia($lugar)
		{
			return "Se ha enviado una ambulancia a: " . $lugar . ".";
		}

		function recibir_ambulancia()
		{
			return "Ha llegado una ambulancia, una persona requiere atención inmediata.";
		}

		function info_hospital()
		{
			$texto = "Nombre: {$this->nombre} <br>";
			$texto = $texto . "Ubicación: {$this->ubicacion} <br>";
			$texto = $texto . "Números de Médicos: {$this->nro_medicos} <br>";
			return $texto;
		}
	}
?>