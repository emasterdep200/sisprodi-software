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
		$this->session->setPath('../../index.php');
		$this->session->verifySession('login');

	}

	public function index()
	{
		$this->view->include('components/headerMain');
		$this->view->include('components/menuSidebar');
		$this->view->footer();
	}

	public function pacientes()
	{
		$this->view->include('components/headerMain');
		$this->view->include('components/menuSidebar');
		$this->view->include('pacientes/pacientesListado');
		$this->view->footer();
	}

	public function usuarios()
	{
		$this->view->include('components/headerMain');
		$this->view->include('components/menuSidebar');
		$this->view->include('usuarios/usuariosListado');
		$this->view->footer();		
	}

	public function medicamentos()
	{
		$this->view->include('components/headerMain');
		$this->view->include('components/menuSidebar');
		$this->view->include('medicamentos/medicamentosListado');
		$this->view->footer();				
	}

	public function perfil()
	{
		$this->view->include('components/headerMain');
		$this->view->include('components/menuSidebar');
		$this->view->include('pacientes/pacientePerfil');
		$this->view->footer();					
	}

	public function cita()
	{
		$this->view->include('components/headerMain');
		$this->view->include('components/menuSidebar');
		$this->view->include('citas/agregarCita');
		$this->view->footer();		
	}
}