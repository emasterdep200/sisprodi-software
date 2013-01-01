<?php

namespace App\Controller\LoginController;

use App\Helpers\Request\Request;
use App\Helpers\managerSessionGeneral\managerSessionGeneral;
use App\Helpers\Auth\Login\loginHelpers;
use App\Helpers\ViewHelper\ViewHelper;

class loginController
{
	private $request;

	private $session;

	private $login;

	private $view;
	
	public function __construct()
	{
		$this->request 	= new Request();
		$this->session 	= new managerSessionGeneral();
		$this->login 	= new loginHelpers();
		$this->view 	= new ViewHelper(false);
	}

	public function login()
	{ 
		$value = $this->login->ExistUser($this->request->requestPost('name'),$this->request->requestPost('password'));
		if ( $value) {
			$this->session->createSession('login','activo');
			$this->view->toUrl('../dashboard/index');
		}else{
			$this->view->toUrl('../../index.php?login=error');
		}
	}

	public function outLogin()
	{
		$this->session->destroySession();
		$this->view->toUrl('../../../index.php');
	}

}