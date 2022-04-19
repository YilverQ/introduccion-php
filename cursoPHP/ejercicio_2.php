<!--Curso de PHP-->
<!--Método POST-->
<?php  

	//EJEMPLO POST.
	if ($_POST) {
		$nombre = $_POST["txtNombre"];
		echo "Hola, " . $nombre;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 2 de PHP</title>
</head>
<body>
	<form action="ejercicio_2.php" method="POST">
		<label>Nombre: </label>
		<input type="text" name="txtNombre">
		<br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>