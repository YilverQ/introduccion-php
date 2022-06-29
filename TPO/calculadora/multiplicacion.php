<?php  
	/*Importaciones*/
	require_once "claseBase.php";

	/*Clase Multiplicacion.*/
	class Multiplicacion extends Main
	{
		/*Efectua una multiplicaciones simple.*/
		public function calcular()
		{
			$resultado = $this->num1 * $this->num2;
			return $resultado;
		}
	}

?>