<?php 

namespace App\Model\User;

use Core\Database\ManipulationData\ManipulationData;

class User
{
	private $manager;

	public function __construct()
	{
		$this->manager = new ManipulationData();
	}

	public function getLoginData()
	{
		return $this->manager->SQL('SELECT * FROM usuarios'); 
	}

}