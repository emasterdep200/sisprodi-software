<?php 

namespace Databases\Insert;

use Core\Database\ManipulationData\ManipulationData;

class InsertData
{
	private $manager;

	function __construct()
	{
		$this->manager = new ManipulationData();
		$this->insetPersona();
	}

	public function insetPersona()
	{
		$row = ['id_persona','nombre'];
		$values = [1,"'Jose'"];
		$this->manager->setRow($row);
		$this->manager->setValue($values);
		$this->manager->insert('persona');
		$this->manager->start();
	}
}