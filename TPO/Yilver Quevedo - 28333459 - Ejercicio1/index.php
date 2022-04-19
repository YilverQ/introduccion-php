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


	//Objetos de Hospital.
	$hospital1 = new Hospital("Jose Gregorio", "Caracas", 45);
	$hospital2 = new Hospital("Policlinica Maracay", "Maracay", 23);

	
	//Objetos de Médico.
	$medico1 = new Medico("Juan", "Escamilla", "Cardiología");
	$medico2 = new Medico("Victor", "Ruiz", "Oftamología");
	$medico3 = new Medico("María", "Castillo", "Medicina General");
	$medico4 = new Medico("Victoria", "Flores", "Cirugía");


	//Objetos de Paciente.
	$paciente1 = new Paciente("Hector", "Lopez", 33); 	
	$paciente2 = new Paciente("Juliana", "Lopez", 34); 	
	$paciente3 = new Paciente("Viviana", "Baron", 20); 	
	$paciente4 = new Paciente("Nahomi", "Flores", 45); 	


	//Métodos e información de Hospital.
	echo "<h3>Hospitales</h3>";
	echo $hospital1->info_hospital() . "<br>";
	echo $hospital1->envia_ambulancia("La Dolorita") . "<br>";
	echo $hospital1->recibir_ambulancia() . "<br>";
	echo "<br>";
	echo $hospital2->info_hospital() . "<br>";
	echo $hospital2->envia_ambulancia("Los totumos") . "<br>";
	echo $hospital2->recibir_ambulancia() . "<br>";
	echo "<br><br>";


	//Métodos e información de Medico.
	echo "<h3>Medicos</h3>";
	echo $medico1->info_medico() . "<br>";
	echo $medico1->curar() . "<br>";
	echo $medico1->recetar_medicamento() . "<br>";
	echo "<br>";
	echo $medico2->info_medico() . "<br>";
	echo $medico2->curar() . "<br>";
	echo $medico2->recetar_medicamento() . "<br>";
	echo "<br>";
	echo $medico3->info_medico() . "<br>";
	echo $medico3->curar() . "<br>";
	echo $medico3->recetar_medicamento() . "<br>";
	echo "<br>";
	echo $medico4->info_medico() . "<br>";
	echo $medico4->curar() . "<br>";
	echo $medico4->recetar_medicamento() . "<br>";
	echo "<br>";


	//Métodos e información de Paciente.
	echo "<h3>Medicos</h3>";
	echo $paciente1->info_paciente() . "<br>";
	echo $paciente1->llorar() . "<br>";
	echo $paciente1->sanarse() . "<br>";
	echo "<br>";
	echo $paciente2->info_paciente() . "<br>";
	echo $paciente2->llorar() . "<br>";
	echo $paciente2->sanarse() . "<br>";
	echo "<br>";
	echo $paciente3->info_paciente() . "<br>";
	echo $paciente3->llorar() . "<br>";
	echo $paciente3->sanarse() . "<br>";
	echo "<br>";
	echo $paciente4->info_paciente() . "<br>";
	echo $paciente4->llorar() . "<br>";
	echo $paciente4->sanarse() . "<br>";
	echo "<br>";
?>