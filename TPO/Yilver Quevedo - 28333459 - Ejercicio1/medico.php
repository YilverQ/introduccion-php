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

	/*Clase de Médico*/
	/*
		Nombre y apellido.
		area de atención
		-----------------------
		curar()
		recetar_medicamento()
	*/
	Class Medico
	{
		private $nombre;
		private $apellido;
		private $area_de_atencion;

		function __construct($nombre, $apellido, $area_de_atencion)
		{
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->area_de_atencion = $area_de_atencion;
		}

		function curar()
		{
			return "El médico ha sanado al paciente.";
		}

		function recetar_medicamento()
		{
			return "El médico ha recetado un medicamento.";
		}

		function info_medico()
		{
			$texto = "Nombre: {$this->nombre} <br>";
			$texto = $texto . "Apellido: {$this->apellido} <br>";
			$texto = $texto . "Área de atención: {$this->area_de_atencion} <br>";
			return $texto;
		}
	}
?>