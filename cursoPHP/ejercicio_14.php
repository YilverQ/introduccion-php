<!--Curso de PHP-->
<!--Variables de Session-->
<?php  
	/**Usar variables de session**/

	#iniciar la session. 
	session_start();

	$_SESSION['usuario'] = "Yilver";
	$_SESSION['status'] = "Logged";

	echo "Session iniciada" . "<br>";
	echo "Usuario: " . $_SESSION['usuario'] . " ";
	echo "Estado: " . $_SESSION['status'];


	#Comprobar sessiones. 
	if (isset($_SESSION['usuario'])){
		echo "Si existe la session de usuario";
	}else{
		echo "No existe la session de usuario";
	}

	//Determina si una variable está creada y su valor no es NULL. 
	if (isset($_SESSION['password'])){
		echo "Si existe la session de password";
	}else{
		echo "No existe la session de password";
	}


	#Destruimos la session de forma manual.
	//NOTA: para destruir la session, en caso de hacerlo en otra página deberá ser creada primero ejemplo. 
	/*
		session_start();
		session_destroy();
	*/
	session_destroy();
?>