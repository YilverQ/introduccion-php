<?php  
	/*Importaciones*/
	require_once "claseBase.php";

	/*Clase Division.*/
	class Division extends Main
	{
		/*Efectua una division simple.*/
		public function calcular()
		{
			$resultado = $this->num1 / $this->num2;
			return $resultado;
		}
	}

?>