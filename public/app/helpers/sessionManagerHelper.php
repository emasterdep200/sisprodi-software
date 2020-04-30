<?php 

namespace App\Helpers\managerSessionGeneral;

	/**
	 * manejador de sesiones del sistema
	 */
	class managerSessionGeneral 
	{
		// private $data = [];

		public function createSession($name,$value)
		{
			session_start();
			$_SESSION[$name] = $name;
		}

		private function destroySession()
		{
        	session_start();
        	session_destroy();
		}

		public function sessionStart()
		{
			session_start();
		}

		public function verifySession($name)
		{
			return ( isset($_SESSION[$name]) ) ? true : false ;
		}

		public function rediretion($path)
		{
			header('location:'.$path);
		}

	}
