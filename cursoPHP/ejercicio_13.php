<!--Curso de PHP-->
<!--Base de Datos-->
<?php  
	/**Conectarse a la base de datos**/

	#Datos del servidor de la Base de datos.
	$servidor = "localhost"; //127.0.0.1
	$usuario = "root";
	$password = "root";
	$db_name = "album";

	try {
		$dsn = "mysql:host=$servidor;dbname=$db_name;charset=utf8mb4";
		$conexion = new PDO($dsn, $usuario, $password);
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Felicidades, Conexión establecida";
	} catch (PDOException $error) {
		echo "Lo siento, ha fallado la conexion";
		echo "Error: ". $error;
	}
?>