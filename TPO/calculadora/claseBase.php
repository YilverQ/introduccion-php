<?php  

	/**Clase Abstracta**/
	abstract class Main
	{
		/**Atributos**/
		protected $num1; #Se puso en protected para poder ser accedidas desde las clases hijas.
		protected $num2;

		public function __construct($num1, $num2)
		{
			$this->num1 = $num1;
			$this->num2 = $num2;
		}

		/**Funcion que calculará los números enviado por el usuario**/
		abstract public function calcular();
	}

?>