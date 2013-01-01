<?php

namespace App\Controller\IndexController;

	use App\Helpers\Request;
	use App\Helpers\ViewHelper\ViewHelper;
	use App\Helpers\managerSessionGeneral\managerSessionGeneral;

	class IndexController
	{
		private $view;

		private $session;

		public function __construct()
		{
			$this->view = new ViewHelper(true);
			$this->session = new managerSessionGeneral();
			$this->view->setPath('login');
			$this->session->sessionStart();
			$this->session->setPath('index.php/dashboard/index');
			$this->session->verifySession('login',false);
		}

		public function index()
		{
			$this->view->header();
			$this->view->include('loginView');
			//this->view->footer();
		}

	} 
