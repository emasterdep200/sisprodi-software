<?php 

namespace App\Helpers\managerSessionGeneral;

	/**
	 * manejador de sesiones del sistema
	 */
	class managerSessionGeneral 
	{
		// private $data = [];

		private $path = '';

		public function setPath($path)
		{
			$this->path = $path;
		}

		public function createSession($name,$value)
		{
			session_start();
			$_SESSION[$name] = $name;
		}

		public function destroySession()
		{
        	session_start();
        	session_destroy();
		}

		public function sessionStart()
		{
			session_start();
		}

		public function verifySession($name,$turn=true)
		{
			if ($turn) {
				( isset($_SESSION[$name]) ) ? true : $this->rediretion() ;
			}else{
				( !isset($_SESSION[$name]) ) ? true : $this->rediretion() ;
			}
			
		}

		private function rediretion()
		{
			header('location:'.$this->path);
		}

	}
