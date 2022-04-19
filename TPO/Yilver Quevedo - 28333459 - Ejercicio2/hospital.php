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

	Class Hospital extends Mantenimiento
	{
		//Los atributos serán accedidas solo por el objeto.
		private $nombre;
		private $ubicacion;
		private $nro_medicos;
		private $suministro;
		private $infraestructura;

		//Métodos
		function __construct($nombre, $ubicacion, $nro_medicos)
		{
			//Asignación de valores.
			$this->nombre = $nombre;
			$this->ubicacion = $ubicacion;
			$this->nro_medicos = $nro_medicos;
			$this->suministro = 100; //Estado de los suministros (100%)
			$this->infraestructura = 100; //Estado de la infraestructura (100%)
		}

		//El método requiere un parametro (lugar) para conocer la ubicación donde se enviará la ambulancia.
		public function envia_ambulancia($lugar) 
		{
			return "Se ha enviado una ambulancia a: " . $lugar . ".";
		}

		//Recibe una ambulancia con un paciente que requiere atención.
		public function recibir_ambulancia()
		{
			$this->suministro -= 10;
			$this->infraestructura -= 2;
			return "Ha llegado una ambulancia, una persona requiere atención inmediata.";
		}

		//El método "info_hospital" retorna toda la información acerca del objeto.
		public function info()
		{
			$texto = "Nombre: {$this->nombre} <br>";
			$texto = $texto . "Ubicación: {$this->ubicacion} <br>";
			$texto = $texto . "Números de Médicos: {$this->nro_medicos} <br>";
			$texto = $texto . "Infraestructura: {$this->infraestructura} <br>";
			$texto = $texto . "Suministros: {$this->suministro} <br>";
			return $texto;
		}


		//Métodos para el mantenimiento.
		public function darMantenimiento()
		{
			$this->infraestructura = 100;
			return "La infraestructura está al: ". $this->infraestructura . "%";
		}
		public function obtenerSuministros()
		{
			$this->suministro = 100;
			return "Los suministro están al: ". $this->suministro . "%";
		}


		//Métodos para el incremento y decremento de médicos.
		public function incrementNroMedico($value = 1)
		{
			return $this->nro_medicos += $value; //Incrementa el número de médicos.
		}
		public function decrementNroMedico($value = 1)
		{
			return $this->nro_medicos -= $value; //Decrementa el número de médicos.
		}


		//Métodos para ver cada uno de los atributos.
		public function getNombre()
		{
			return $this->nombre; //retorna el atributo nombre.
		}
		public function getUbicacion() //retorna la ubicación del hospital.
		{
			return $this->ubicacion; //retorna el atributo ubicación.
		}
		public function getNroMedico() //retorna el número total de médicos.
		{
			return $this->nro_medicos; //retorna el atributo nro_medicos.
		}
		public function getSuministro()
		{
			return $this->suministro; //retorna el nivel de suministro.
		}
		public function getInfraestructura()
		{
			return $this->infraestructura; //retorna el nivel de la infraestructura.
		}
	}

?>