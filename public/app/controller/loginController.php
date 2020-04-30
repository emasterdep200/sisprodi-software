<?php

namespace App\Controller\LoginController;

use App\Helpers\Request\Request;
use App\Helpers\managerSessionGeneral\managerSessionGeneral;
use App\Helpers\Auth\Login\loginHelpers;

class loginController
{
	private $request;

	private $session;

	private $login;
	
	public function __construct()
	{
		$this->request 	= new Request();
		$this->session 	= new managerSessionGeneral();
		$this->login 	= new loginHelpers();
	}

	public function login()
	{ 
		echo 'hola';
		$value = $this->login->ExistUser($this->request->requestPost('name'),$this->request->requestPost('password'));
		if ( $value) {
			echo 'aquí me logue';
			$this->session->createSession('login','activo');
			$this->session->rediretion('../dashboard/index');
		}
	}

}