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
	include "hospital.php";
	include "medico.php";
	include "paciente.php";


	/*
		INFORMACIÓN de los Objetos.
		Se harán instancias de varios objetos. 
		Su nomenclatura es: $variable = new Objetc($parametro1, $parametroN);
	*/


	/*
		Se crearán varios objetos de cada clase pero no se llamarán a todos en el documento ya que no es el objetivo del trabajo.
	*/
	//Objetos de Hospital.
	$hospital1 = new Hospital("Jose Gregorio Hernandez", "Caracas", 45);
	$hospital2 = new Hospital("Policlinica Maracay", "Maracay", 23);

	
	//Objetos de Médico.
	$medico1 = new Medico("Juan", "Escamilla", 35, "Cardiología");
	$medico2 = new Medico("Victor", "Ruiz", 24, "Oftamología");
	$medico3 = new Medico("María", "Castillo", 42, "Medicina General");
	$medico4 = new Medico("Victoria", "Flores", 38, "Cirugía");


	//Objetos de Paciente.
	$paciente1 = new Paciente("Hector", "Lopez", 33); 	
	$paciente2 = new Paciente("Juliana", "Lopez", 34); 	
	$paciente3 = new Paciente("Viviana", "Baron", 20); 	
	$paciente4 = new Paciente("Nahomi", "Flores", 45); 	


	/*
		Se ejecutarán los métodos más importantes de cada función.
		La nomenclatura es: $object->method($parametro1);
	*/

	//Métodos e información de Hospital.
	echo "<h3>Hospitales</h3>";
	echo $hospital1->info() . "<br>"; //Información del hospital.

	//Para enviar una ambulancia hay que especificar el lugar "Ubicación" como string. 
	echo $hospital1->envia_ambulancia("La Dolorita") . "<br>"; //Enviar ambulancia a $parametro1
	echo $hospital1->recibir_ambulancia() . "<br>"; //metodo para recibir una ambulancia.
	echo "<br>";
	echo "<b>Datos Nuevos...</b><br>";
	echo "Incremento de Personal: +12. <br>";
	echo "Decremento de Personal: -5. <br>";
	$hospital1->incrementNroMedico(12); //añade 12 médicos.
	$hospital1->decrementNroMedico(5); //elimina 5 médicos.
	echo "Nuevos Datos del Hospital. <br>";
	echo $hospital1->info() . "<br>"; //Información del hospital.



	//Métodos e información de Medico.
	echo "<h3>Medicos</h3>";
	echo $medico1->info() . "<br>"; //Información del médico.
	echo $medico1->curar() . "<br>"; //método para curar un paciente.
	echo $medico1->recetar_medicamento() . "<br>"; //método para recetar un medicamento.
	echo "<br>";
	echo "<b>Accediendo a los métodos de la clase Abstracta...</b><br>";
	echo $medico1->getNombre();
	echo $medico1->getApellido();
	echo $medico1->getEdad();



	//Métodos e información de Paciente.
	echo "<h3>Medicos</h3>";
	echo $paciente1->info() . "<br>"; //Información del paciente.
	echo $paciente1->llorar() . "<br>"; //Método para que el paciente agonice de dolor.
	echo $paciente1->sanarse() . "<br>"; //Método para auto-sanar.
	echo "<br>";
	echo "<b>Accediendo a los métodos de la clase Abstracta...</b><br>";
	echo $paciente1->getNombre();
	echo $paciente1->getApellido();
	echo $paciente1->getEdad();
?>