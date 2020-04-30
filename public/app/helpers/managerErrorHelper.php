<?php 

namespace App\Helpers\ManagerError
{
	class ManagerError
	{
		private $menssage;

		private $code;

		private $typeUser;

		public function __construct($menssage,$code,$typeUser)
		{
			$this->menssage = $menssage;
			$this->code = $code;
			$this->typeUser = $typeUser;	
			if ( $this->typeUser == 'Dev' ) 
			{
				
			} 
			else if ( $this->typeUser == 'User' )
			{
				$this->ErrorForUser();
			}
			else 
			{

			}
		}

		public function getViewCustom($path)
		{

		}

		/*
		* | esta funcion es para enviar una vista básica con detalles del error
		*/
		private function ErrorForUser()
		{
			global $datos;
			$datos  = array(
				'menssage' 	=> $this->menssage,
				'code'		=> $this->code 
			);
			include 'app/helpers/othersViews/404.php';
		}

		private function ErrorForDeveloper()
		{
			global $datos;
			$datos  = array(
				'menssage' 	=> $this->menssage,
				'code'		=> $this->code 
			);
			include 'app/helpers/othersViews/404.php';			
		}

	}
}