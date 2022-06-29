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
	require_once "maintenance_Abstract.php";

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

	Class Hospital extends Maintenance
	{
		//Los atributos serán accedidas solo por el objeto.
		private $name;
		private $ubication;
		private $numMedical;
		private $supply;
		private $infrastructure;

		//Métodos
		function __construct($name, $ubication, $numMedical)
		{
			//Asignación de valores.
			$this->name = $name;
			$this->ubication = $ubication;
			$this->numMedical = $numMedical;
			$this->supply = 100; //Estado de los suministros (100%)
			$this->infrastructure = 100; //Estado de la infraestructura (100%)
		}

		//El método requiere un parametro (lugar) para conocer la ubicación donde se enviará la ambulancia.
		public function sendAmbulance($place) 
		{
			return "Se ha enviado una ambulancia a: " . $place . ".";
		}

		//Recibe una ambulancia con un paciente que requiere atención.
		public function getAmbulance()
		{
			$this->supply -= 10;
			$this->infrastructure -= 2;
			return "Ha llegado una ambulancia, una persona requiere atención inmediata.";
		}

		//El método "info_hospital" retorna toda la información acerca del objeto.
		public function info()
		{
			$text = "Nombre: {$this->name} <br>";
			$text .= "Ubicación: {$this->ubication} <br>";
			$text .= "Números de Médicos: {$this->numMedical} <br>";
			$text .= "Infraestructura: {$this->infrastructure} <br>";
			$text .= "Suministros: {$this->supply} <br>";
			return $text;
		}


		//Métodos para el mantenimiento.
		public function toGiveMaintenance()
		{
			$this->infrastructure = 100;
			return "La infraestructura está al: ". $this->infrastructure . "%";
		}
		public function getNewSupply()
		{
			$this->supply = 100;
			return "Los suministro están al: ". $this->supply . "%";
		}


		//Métodos para el incremento y decremento de médicos.
		public function incrementNumMedical($value = 1)
		{
			return $this->numMedical += $value; //Incrementa el número de médicos.
		}
		public function decrementNumMedical($value = 1)
		{
			return $this->numMedical -= $value; //Decrementa el número de médicos.
		}


		//Métodos para ver cada uno de los atributos.
		public function getName()
		{
			return "Nombre: " . $this->name; //retorna el atributo nombre.
		}
		public function getUbication() //retorna la ubicación del hospital.
		{
			return "Ubicación: " . $this->ubication; //retorna el atributo ubicación.
		}
		public function getNumMedical() //retorna el número total de médicos.
		{
			return "Numero De Medicos: " . $this->numMedical; //retorna el atributo nro_medicos.
		}
		public function getSupply()
		{
			return "Nivel de suministro: " . $this->supply; //retorna el nivel de suministro.
		}
		public function getIntrastructure()
		{
			return "Nivel de la infraestructura: " . $this->infrastructure; //retorna el nivel de la infraestructura.
		}
	}

?>