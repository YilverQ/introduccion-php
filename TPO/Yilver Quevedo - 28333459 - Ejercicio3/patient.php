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

	/*Clase de Paciente*/
	/*
		nombre y apellido.
		edad
		---------------------
		llorar()
		sanarse()
	*/
	Class Patient extends ActionPersonal
	{
		//Los atributos serán accedidas solo por el objeto.
		protected $name;
		protected $lastName;
		protected $age;


		//Métodos
		function __construct($name, $lastName, $age)
		{
			//Asignación de valores.
			$this->name = $name;
			$this->lastName = $lastName;
			$this->age = $age;
		}

		//Método para hacer agonizar de dolor y exigir atención.
		public function toCry()
		{
			return "El paciente agoniza de dolor, requiere atención.";
		}

		//El método "info_paciente" retorna toda la información acerca del objeto.
		public function info()
		{
			$text = "Nombre: {$this->name} <br>";
			$text .= "Apellido: {$this->lastName} <br>";
			$text .= "Edad: {$this->age} <br>";
			return $text; 
		}



		//Métodos de la clase Abstracta ActionPersonal...
		//Método para expresar que el paciente se ha sanado finalmente.
		public function toCure()
		{
			return "El paciente se ha sanado.";
		}

		//Método para curar un paciente.
		public function sleep()
		{
			return "El paciente duerme en la cama asignada a él.";
		} 

		//Método para curar un paciente.
		public function eat()
		{
			return "Ha llegado la hora de comer, el paciente come en el cuarto de reposo.";
		} 
	}
?>