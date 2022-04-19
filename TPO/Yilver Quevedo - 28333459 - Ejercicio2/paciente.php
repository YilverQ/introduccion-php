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

	/*Clase de Paciente*/
	/*
		nombre y apellido.
		edad
		---------------------
		llorar()
		sanarse()
	*/
	Class Paciente extends DatosPersonales
	{
		//Los atributos serán accedidas solo por el objeto.
		protected $nombre;
		protected $apellido;
		protected $edad;


		//Métodos
		function __construct($nombre, $apellido, $edad)
		{
			//Asignación de valores.
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->edad = $edad;
		}

		//Método para hacer agonizar de dolor y exigir atención.
		public function llorar()
		{
			return "El paciente agoniza de dolor, requiere atención.";
		}

		//Método para expresar que el paciente se ha sanado finalmente.
		public function sanarse()
		{
			return "El paciente se ha sanado.";
		}

		//El método "info_paciente" retorna toda la información acerca del objeto.
		public function info()
		{
			$texto = "Nombre: {$this->nombre} <br>";
			$texto = $texto . "Apellido: {$this->apellido} <br>";
			$texto = $texto . "Edad: {$this->edad} <br>";
			return $texto; 
		}
	}
?>