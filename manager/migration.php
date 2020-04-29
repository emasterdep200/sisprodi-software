<?php 

namespace Manager\Migration;

use Core\Database\ManagerTable\ManagerTable;

class Migration
{
	protected $table;

	protected $createBool;

	protected $gsbd;

	function __construct()
	{
		$this->gsbd = new ManagerTable();
	}

	protected function setTable($table)
	{
		$this->gsbd->setTable($table);
	}

	protected function dropIfExist($table)
	{
		$this->gsbd->setTable($table);
		$this->gsbd->dropTable();
		$this->gsbd->apply();
	}

	public function __destruct()
	{
		unset($this->gsbd);
	}

}