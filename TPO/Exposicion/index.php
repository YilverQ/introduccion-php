<?php 
	//Importar archivos.
	include "animal.php";
	include_once "loro.php";
	include_once "perro.php";
	include_once "ballena.php";

	//Objetos.
	$perro 	 = new Perro();
	$loro 	 = new Loro();
	$ballena = new Ballena();
	
	//Métodos de Perro.
	echo "<h3>Perro</h3>";
	echo $perro->presentarse() . "<br>";
	echo $perro->comunicarse() . "<br>";
	echo $perro->moverse() . "<br>";
	echo "<br>";

	//Métodos de Loro.
	echo "<h3>Loro</h3>";
	echo $loro->presentarse() . "<br>";
	echo $loro->comunicarse() . "<br>";
	echo $loro->moverse() . "<br>";
	echo "<br>";

	//Métodos de Ballena.
	echo "<h3>Ballena</h3>";
	echo $ballena->presentarse() . "<br>";
	echo $ballena->comunicarse() . "<br>";
	echo $ballena->moverse() . "<br>";
	echo "<br>";
?>