<?php 

namespace Databases\Insert;

use Core\Database\ManipulationData\ManipulationData;

class InsertData
{
	private $manager;

	function __construct()
	{
		$this->manager = new ManipulationData();
		$this->insetUsuarios();
	}

	public function insetUsuarios()
	{
		$password = password_hash('4321',PASSWORD_BCRYPT);

		$row = ['id_usuario','nombre','password'];
		$values = [1,"'Jose'","'".$password."'"];
		$this->manager->setRow($row);
		$this->manager->setValue($values);
		$this->manager->insert('usuarios');
		$this->manager->start();
	}
}