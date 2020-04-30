<?php

namespace App\Controller\IndexController;

	use App\Helpers\Request;
	use App\Helpers\ViewHelper\ViewHelper;

	class IndexController
	{
		private $view;

		public function __construct()
		{
			$this->view = new ViewHelper(true);
		}

		public function index()
		{
			$this->view->header();
			$this->view->include('loginView');
			$this->view->footer();
		}

	} 
