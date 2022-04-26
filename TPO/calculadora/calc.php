<?php  

	/*Importaciones*/
	include "suma.php";
	include "resta.php";
	include "multiplicacion.php";
	include 'division.php';

	/*Variables*/
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$opcion = $_POST["opcion"];

	/*Selección de casos...*/
	switch ($opcion) {
		/*Caso de Suma...*/
		case 'suma':
			$obj = new Suma($num1, $num2);
			$resultado = $obj->calcular();
			echo "El resultado de tu suma es: " . $resultado;
			break;
		
		/*Caso de Resta...*/
		case 'resta':
			$obj = new Resta($num1, $num2);
			$resultado = $obj->calcular();
			echo "El resultado de tu resta es: " . $resultado;
			break;

		/*Caso de Multiplicación...*/
		case 'multiplicacion':
			$obj = new Multiplicacion($num1, $num2); 
			$resultado = $obj->calcular();
			echo "El resultado de tu multiplicacion es: " . $resultado;
			break;

		/*Caso de División...*/
		case 'division':
			$obj = new Division($num1, $num2); 
			$resultado = $obj->calcular();
			echo "El resultado de tu division es: " . $resultado;
			break;

		/*En caso de que la opción ingresada no sea valida...*/
		default:
			echo "Lo siento, la opcion no es valida.";
			break;
	}
?>