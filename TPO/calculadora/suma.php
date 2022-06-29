<?php  
	/*Importaciones*/
	require_once "claseBase.php";

	/*Clase Suma.*/
	class Suma extends Main
	{
		/*Efectua una suma simple.*/
		public function calcular()
		{
			$resultado = $this->num1 + $this->num2;
			return $resultado;
		}
	}

?>