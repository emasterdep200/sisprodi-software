<?php 

use Core\Database\ManagerTable\ManagerTable;
use Manager\Migration\Migration;

class PersonaTable extends Migration
{

	public function up()
	{
		parent::__construct();
		$this->setTable('persona');
		$this->gsbd->createTable();
		$this->gsbd->isVarchar('nombre',20);
		$this->gsbd->jump();
		$this->gsbd->int('id_persona');
		$this->gsbd->isPrimary();
		$this->gsbd->end();
		$this->gsbd->create();
	}	

	public function down()
	{
		$this->dropIfExist('persona');
	}

}

