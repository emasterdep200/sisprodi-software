<?php 

namespace App\Helpers\managerSessionGeneral
{
	/**
	 * manejador de sesiones del sistema
	 */
	class managerSessionGeneral 
	{
		// private $data = [];

		public function __construct()
		{
			// $retVal = (condition) ? a : b ;
		}


		private function createSession($name,$value)
		{
			$_SESSION[$name] = $name;
		}

		private function destroySession()
		{
        	session_start();
        	session_destroy();
		}

		public function sessionStart()
		{
			$this->startSesion();
		}

		private function verifySession($name)
		{
			return ( isset($_SESSION[$name]) ) ? true : false ;
		}

		public function rediretion($path)
		{
			header('location:'.$path);
		}
	}
}