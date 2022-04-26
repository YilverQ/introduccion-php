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
	require_once "actionPersonal_Abstract.php";

	/*Clase de Médico*/
	/*
		Nombre y apellido.
		area de atención
		-----------------------
		curar()
		recetar_medicamento()
	*/
	Class Medical extends ActionPersonal
	{
		//Los atributos serán accedidas solo por el objeto.
		protected $name;
		protected $lastName;
		protected $age;
		private $attention_area;


		//Métodos
		function __construct($name, $lastName, $age, $attention_area)
		{
			//Asignación de valores.
			$this->name = $name;
			$this->lastName = $lastName;
			$this->age = $age;
			$this->attention_area = $attention_area;
		}

		//Método para recetar un medicamento.
		public function pescribeMedicine()
		{
			return "El médico ha recetado un medicamento.";
		}

		//El método "info_medico" retorna toda la información importante del objeto.
		public function info()
		{
			$text = "Nombre: {$this->name} <br>";
			$text .= "Apellido: {$this->lastName} <br>";
			$text .= "Edad: {$this->age} <br>";
			$text .= "Área de atención: {$this->attention_area} <br>";
			return $text;
		}

		//Métodos para ver uno de los atributos.
		public function getAttentionArea()
		{
			$area = $this->attention_area;
			$text = "El área de atención del medico es: ";
			return ($text . $area); //retorna el atributo area_de_atencion.
		}

		//Métodos de la clase Abstracta ActionPersonal...
		//Método para curar un paciente.
		public function toCure()
		{
			return "El médico ha sanado al paciente.";
		} 

		//Método para curar un paciente.
		public function sleep()
		{
			return "El medico ahora está cansado por tantas horas de trabajo, ahora está durmiendo en la sala de Doctores.";
		} 

		//Método para curar un paciente.
		public function eat()
		{
			return "El médico come en la cafetería pública.";
		} 
	}
?>