<?php 

use Core\Database\ManagerTable\ManagerTable;
use Manager\Migration\Migration;

class UserTable extends Migration
{

	public function up()
	{
		parent::__construct();
		$this->setTable('usuarios');
		$this->gsbd->executeInsert('
			CREATE TABLE usuarios ( 
				user_id INT,
				email varchar(100) UNIQUE,
				password varchar(500), 
				username varchar(50) UNIQUE,
				persona_id INT(11),
				PRIMARY KEY (user_id),
				FOREIGN KEY (persona_id) REFERENCES personas (cedula)
			); 
		');
	}	

	public function down()
	{
		$this->dropIfExist('usuarios');
	}

}