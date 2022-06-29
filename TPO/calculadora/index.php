<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculadora</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<!--Header-->
	<header>
		<h1>Calculadora básica con PHP</h1>
	</header>

	<!--Formulario-->
	<div class="formulario">
	<form action="calc.php" method="POST">
		<input type="number" name="num1">
		<input type="number" name="num2">
		<!--Opciones validas de la calculadora-->
		<select name="opcion">
			<option value="suma">Suma</option>
			<option value="resta">Resta</option>
			<option value="multiplicacion">Multiplicación</option>
			<option value="division">División</option>
		</select>
		<input type="submit" value="Calcular">
	</form>
	</div>
</body>
</html>