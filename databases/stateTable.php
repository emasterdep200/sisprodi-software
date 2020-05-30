<?php 

use Core\Database\ManagerTable\ManagerTable;
use Manager\Migration\Migration;

class StateTable extends Migration
{

	public function up()
	{
		parent::__construct();
		$this->setTable('estados');
		$this->gsbd->executeInsert('CREATE TABLE estados ( estado_id INT PRIMARY KEY,nombre varchar(100) ); ');
	}	

	public function down()
	{
		$this->dropIfExist('estados');
	}

}

