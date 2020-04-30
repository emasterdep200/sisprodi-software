<?php 

namespace App\Controller\dashboardController;

use App\Helpers\managerSessionGeneral\managerSessionGeneral;
use App\Helpers\ViewHelper\ViewHelper;

class dashboardController
{
	private $session;

	private $view;

	public function __construct()
	{
		$this->view = new ViewHelper(true);
		$this->session = new managerSessionGeneral();
		$this->session->sessionStart();
		if (  $this->session->verifySession('login') ){
			
		}else{
			$this->session->rediretion('../index.php');
		}
	}

	public function index()
	{
		//$this->view->header();
		$this->view->include('components/headerMain');
		$this->view->include('components/menuSidebar');
		$this->view->footer();
	}
}