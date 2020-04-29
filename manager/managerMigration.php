<?php 

namespace Manager\Elhemium;

use Databases\Insert\InsertData;

class Elhemium
{

	private $filesData = [];

	private $clasName;

	private $configDB;

	public function __construct($files)
	{
		$this->filesData = $files;
		$this->loadFilesMigration();
		$this->executeDown();
		$this->executeUp();
		$this->insertData();
	}

	public function loadFilesMigration()
	{
		foreach ($this->filesData as $root) {
			foreach ($root['files'] as $file) 
			{
				$path = 'databases/'.$file.$root['type'].'.php';
				require_once $path;
			}	
		}
	}

	public function executeUp()
	{
		foreach ($this->filesData as $root) {
			foreach ($root['files'] as $classInstance) 
			{
				$classInstance = ucwords($classInstance).'Table';
				$this->clasName = new $classInstance();
				$this->clasName->up();
				unset($this->clasName);
			}	
		}
	}

	public function executeDown()
	{
		foreach ($this->filesData as $root) {
			foreach ($root['files'] as $classInstance) 
			{
				$classInstance = ucwords($classInstance).'Table';
				$this->clasName = new $classInstance();
				$this->clasName->down();
				unset($this->clasName);
			}	
		}		
	}

	public function insertData()
	{
		$data = new InsertData();
	}

}
