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
	abstract class PersonalData
	{
		//Las funciones get no son necesarias abstraerlas.
		public function getName()
		{
			return "Nombre: " . $this->name . "<br>"; //retorna el atributo nombre.
		}
		public function getLastName()
		{
			return "Apellido: " . $this->lastName . "<br>"; //retorna el atributo apellido.
		}
		public function getAge()
		{
			return "Edad: " . $this->age . "<br>"; //retorna el atributo de edad.
		}
		//Método abstracto para conocer la información del objeto.
		abstract public function info();
	}
?>