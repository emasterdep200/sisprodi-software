<?php

use Core\Database\ManagerTable\ManagerTable;
use Manager\Migration\Migration;

class PersonaTable extends Migration
{

	public function up()
	{
		parent::__construct();
		$this->setTable('personas');
		$this->gsbd->executeInsert('
			CREATE TABLE personas ( 
				cedula INT PRIMARY KEY ,
				nombre varchar(100),
				apellido varchar(100), 
				telefono varchar(20),
				fecha_nacimiento date
			); 
		');
	}	

	public function down()
	{
		$this->dropIfExist('personas');
	}

}