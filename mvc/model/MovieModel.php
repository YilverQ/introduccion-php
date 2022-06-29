<?php  
	#Modelo -> Contiene toda la información relativa a los datos. 
	/**Modelo -> MovieModel**/
	class MovieModel
	{
		#Atributos.
		private $name;
		private $country; #País.
		private $tag; #Genero.
		private $production; #Casa productora.

		#Constructor.
		function __construct($name, $country, $tag, $production)
		{
			$this->name = $name;
			$this->country = $country;
			$this->tag = $tag;
			$this->production = $production;
		}

		/*Los métodos sirven para acceder a los datos y modificarlos.*/
		#Nombre de la película.
		public function setName($name)
		{
			$this->name = $name;
		}

		public function getName()
		{
			return $this->name;
		}

		#País de la película.
		public function setCountry($country)
		{
			$this->country = $country;
		}

		public function getCountry()
		{
			return $this->country;
		}

		#Genero de la película.
		public function setTag($tag)
		{
			$this->tag = $tag;
		}

		public function getTag()
		{
			return $this->tag;
		}

		#Casa de producción.
		public function setProduction($production)
		{
			$this->production = $production;
		}

		public function getProduction()
		{
			return $this->production;
		}
	}
?>