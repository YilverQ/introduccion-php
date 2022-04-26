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
	include "medical.php";
	include "patient.php";


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
	$medical1 = new Medical("Juan", "Escamilla", 35, "Cardiología");
	$medical2 = new Medical("Victor", "Ruiz", 24, "Oftamología");
	$medical3 = new Medical("María", "Castillo", 42, "Medicina General");
	$medical4 = new Medical("Victoria", "Flores", 38, "Cirugía");


	//Objetos de Paciente.
	$patient1 = new Patient("Hector", "Lopez", 33); 	
	$patient2 = new Patient("Juliana", "Lopez", 34); 	
	$patient3 = new Patient("Viviana", "Baron", 20); 	
	$patient4 = new Patient("Nahomi", "Flores", 45); 	


	/*
		Aplicación de la guía 3.
		Se añadió modularización al código. 
		Se ejecutó la herencia. 
		Y se realizó el Polimorfismo perfectamente.
	*/

	//Aplicación de la guía 3 sobre modularización.
	echo "<h3>Polimorfismo</h3>";
	echo "<b>Métodos según el Medico:</b><br>";
	echo $medical1->sleep() . "<br>"; //Información del paciente.
	echo $medical1->eat() . "<br>"; //Método para que el paciente agonice de dolor.
	echo $medical1->toCure() . "<br>"; //Método para auto-sanar.
	echo "<br>";
	echo "<b>Métodos según el Paciente</b><br>";
	echo $patient1->sleep() . "<br>";
	echo $patient1->eat() . "<br>";
	echo $patient1->toCure() . "<br>";
	echo "<br><br><br>";



	// Ejecuciones antiguas...
	/*
		Se ejecutarán los métodos más importantes de cada función.
		La nomenclatura es: $object->method($parametro1);
	*/
	//Métodos e información de Hospital.
	echo "<h3>Hospitales</h3>";
	echo $hospital1->info() . "<br>"; //Información del hospital.

	//Para enviar una ambulancia hay que especificar el lugar "Ubicación" como string. 
	echo $hospital1->sendAmbulance("La Dolorita") . "<br>"; //Enviar ambulancia a $parametro1
	echo $hospital1->getAmbulance() . "<br>"; //metodo para recibir una ambulancia.
	echo "<br>";
	echo "<b>Datos actualizados de hospital...</b><br>";
	echo "Incremento de Personal: +12. <br>";
	echo "Decremento de Personal: -5. <br>";
	$hospital1->incrementNumMedical(12); //añade 12 médicos.
	$hospital1->decrementNumMedical(5); //elimina 5 médicos.
	echo "Nuevos Datos del Hospital. <br>";
	echo $hospital1->info() . "<br>"; //Información del hospital.



	//Métodos e información de Medico.
	echo "<h3>Medicos</h3>";
	echo $medical1->info() . "<br>"; //Información del médico.
	echo $medical1->toCure() . "<br>"; //método para curar un paciente.
	echo $medical1->pescribeMedicine() . "<br>"; //método para recetar un medicamento.
	echo "<br>";
	echo "<b>Accediendo a los métodos de la clase Abstracta...</b><br>";
	echo $medical1->getName();
	echo $medical1->getLastName();
	echo $medical1->getAge();



	//Métodos e información de Paciente.
	echo "<h3>Paciente</h3>";
	echo $patient1->info() . "<br>"; //Información del paciente.
	echo $patient1->toCry() . "<br>"; //Método para que el paciente agonice de dolor.
	echo $patient1->toCure() . "<br>"; //Método para auto-sanar.
	echo "<br>";
	echo "<b>Accediendo a los métodos de la clase Abstracta...</b><br>";
	echo $patient1->getName();
	echo $patient1->getLastName();
	echo $patient1->getAge();
?>