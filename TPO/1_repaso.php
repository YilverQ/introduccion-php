<!--Formas de incluir un archivo-->
<!--include, require y require_once-->

<!--include-->
<?php 

	include "greet.php";
	echo greet("Jesus Gil", "Buenas tardes");
	echo "<br>";
	echo greet("Yilver Quevedo", "Buenas noches");
	echo "<br>";
	//Como acceder a las carpetas con include.
	/*
		include "great.php";
		include "folder/great.php";
		include "folder/folder/great.php";
		include "../folder/great.php";

	*/
?>

<!--require-->
<?php 

	require "greet.php";
	echo greet("Jesus gil", "Buenas tardes");
	echo "<br>";
	echo "Este es el segundo saludo";
	echo "<br>";

?>

<!--require_once-->
<?php 

	require_once "greet.php";
	echo greet("Jesus gil", "Buenas tardes");
	echo "<br>";
	echo "Este es el segundo saludo";
	echo "<br>";

?>