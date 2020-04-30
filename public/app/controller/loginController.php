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
		$value = $this->login->ExistUser($this->request->requestPost('name'),$this->request->requestPost('password'));
		if ( $value) {
			echo '<hr> ahora si me logue';
		}
	}

}