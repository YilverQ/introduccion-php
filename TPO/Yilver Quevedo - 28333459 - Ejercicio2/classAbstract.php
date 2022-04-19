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

	//Clase Abstracta "Datos Personales" para conocer los atributos de médico y paciente.
	abstract class DatosPersonales
	{
		//Las funciones get no son necesarias abstraerlas.
		public function getNombre()
		{
			return $this->nombre; //retorna el atributo nombre.
		}
		public function getApellido()
		{
			return $this->apellido; //retorna el atributo apellido.
		}
		public function getEdad()
		{
			return $this->edad; //retorna el atributo de edad.
		}
		//Método abstracto para conocer la información del objeto.
		abstract public function info();
	}

	//Clase "Mantenimiento" para dar mantenimiento a la infraestructura y obtener suministros.  
	abstract class Mantenimiento
	{
		abstract public function darMantenimiento(); //Da el mantenimiento del edificio.
		abstract public function obtenerSuministros(); //Surte de suministros.
	}
?>