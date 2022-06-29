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

	//Importar archivos.
	require_once "classAbstract.php";

	/*Clase de Médico*/
	/*
		Nombre y apellido.
		area de atención
		-----------------------
		curar()
		recetar_medicamento()
	*/
	Class Medico extends DatosPersonales
	{
		//Los atributos serán accedidas solo por el objeto.
		protected $nombre;
		protected $apellido;
		protected $edad;
		private $area_de_atencion;


		//Métodos
		function __construct($nombre, $apellido, $edad, $area_de_atencion)
		{
			//Asignación de valores.
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->edad = $edad;
			$this->area_de_atencion = $area_de_atencion;
		}

		//Método para curar un paciente.
		public function curar()
		{
			return "El médico ha sanado al paciente.";
		}

		//Método para recetar un medicamento.
		public function recetar_medicamento()
		{
			return "El médico ha recetado un medicamento.";
		}

		//El método "info_medico" retorna toda la información importante del objeto.
		public function info()
		{
			$texto = "Nombre: {$this->nombre} <br>";
			$texto = $texto . "Apellido: {$this->apellido} <br>";
			$texto = $texto . "Edad: {$this->edad} <br>";
			$texto = $texto . "Área de atención: {$this->area_de_atencion} <br>";
			return $texto;
		}

		//Métodos para ver uno de los atributos.
		public function getNroMedico()
		{
			return $this->area_de_atencion; //retorna el atributo area_de_atencion.
		}
	}
?>