<!--Curso de PHP-->
<!--Programación Orientada a Objetos-->
<?php  

	//Programación Orientada a Objetos.
	/**Ejemplo de Métodos Estáticos**/
	class ClaseStatica
	{
		public static function unMetodo()
		{
			echo "Soy un método estático, puedes llamarme desde donde quieras.";
		}
	}

	$obj = new ClaseStatica();
	$obj->unMetodo();
	echo "<br>";

	ClaseStatica::unMetodo(); //Esta es la sentencia para ejecutar un método estático.
?>