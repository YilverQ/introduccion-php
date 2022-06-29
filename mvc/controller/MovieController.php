<?php 
	#Controler -> Tiene la función de recoger los datos del modelo y pasarlo a la vista. 
	/**Controlador**/
	class MovieController
	{
		#Atributos.
		private $listMovies; #

		#Constructor.
		public function __construct()
		{
			$this->listMovies = [
				1 => new MovieModel("Piratas del caribe", "EE.UU", "Aventura", "Disney"),
				2 => new MovieModel("Klaus", "España", "Animada", "Netflix"),
				3 => new MovieModel("Papita, Maní y Tostón", "Venezuela", "Comedia", "Desconocido"),
				4 => new MovieModel("Encanto", "EE.UU", "Animada", "Disney"),
				5 => new MovieModel("Spiderman", "EE.UU", "SuperHeroes", "Disney")
			];
		}

		public function index()
		{
			#Le asignamos las películas a una variable que estará esperando la vista.
			$rowset = $this->listMovies;

			#le paso los datos a la vista. 
			include "view/index.php";
		}
	}
?>