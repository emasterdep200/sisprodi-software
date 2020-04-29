<?php 

use Core\Database\ManagerTable\ManagerTable;
use Manager\Migration\Migration;

class RolTable extends Migration
{

	public function up()
	{
		parent::__construct();
		$this->setTable('rol');
		$this->gsbd->createTable();
		$this->gsbd->isVarchar('permiso',20);
		$this->gsbd->jump();
		$this->gsbd->int('id_rod');
		$this->gsbd->isPrimary();
		$this->gsbd->end();
		$this->gsbd->create();
	}	

	public function down()
	{
		$this->dropIfExist('rol');
	}

}