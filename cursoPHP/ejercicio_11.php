<!--Curso de PHP-->
<!--Programación Orientada a Objetos-->
<?php  

	//Programación Orientada a Objetos.
	/**Ejemplo de clase**/
	class Persona
	{
		public $nombre; //propiedades.
		private $edad;
		protected $altura;

		public function __construct($nombre)
		{
			$this->nombre = $nombre;
		}

		public function mostrarNombre()
		{
			echo "Nombre: " . $this->nombre;
		}
	}

	class Trabajador extends Persona
	{
		public $puesto;

		public function __construct($nombre, $puesto)
		{
			$this->nombre = $nombre;
			$this->puesto = $puesto;
		}

		public function presentarse()
		{
			echo "Hola soy " . $this->nombre . " y soy un " . $this->puesto;
		}
	}

	/**Objetos**/
	$objAlumno = new Persona("Yilver"); //Instanciar o crear un nuevo objeto.
	$objAlumno->mostrarNombre();


	/**Formas de imprimir propiedades**/
	//Imprimr propiedades.
	echo $objAlumno->nombre;
	// echo $objAlumno->edad; //No se puede acceder porque está privado.
	//echo $objAlumno->altura;
	echo "<br><br>";

	/*Imprimir otro objeto*/
	$objTrabajador = new Trabajador("Pedrito", "Obrero");
	$objTrabajador->presentarse();
?>