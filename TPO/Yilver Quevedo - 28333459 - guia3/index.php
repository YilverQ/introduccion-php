<?php 
	
	/*Importaciones*/
	require_once("base.php");

	require_once("admin.php");
	require_once("user.php");
	require_once("guest.php");

	
	/*Objetos*/
	echo "Lista: <br>";

	#Invitado
	$guest = new Guest();
	echo $guest->login();

	#Usuario
	$user = new User("Pedrito");
	echo $user->login();

	#Administrador
	$admin = new Admin("Yilver");
	echo $admin->login();
?>