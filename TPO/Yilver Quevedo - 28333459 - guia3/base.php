<?php 
	
	abstract class Base
	{
		protected $name = "";

		private function className()
		{
			return get_called_class();
		}

		public function login()
		{
			return "Mi nombre es {$this->name}:
					desde la clase {$this->className()}
					y me encuentro iniciando sección...
					<br>";
		}
	}

?>