<?php  
	/*Importaciones*/
	require_once "claseBase.php";

	/*Clase Resta.*/
	class Resta extends Main
	{
		/*Efectua una resta simple.*/
		public function calcular()
		{
			$resultado = $this->num1 - $this->num2;
			return $resultado;
		}
	}

?>