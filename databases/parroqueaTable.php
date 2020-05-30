<?php 

use Core\Database\ManagerTable\ManagerTable;
use Manager\Migration\Migration;

class ParroqueaTable extends Migration
{

	public function up()
	{
		parent::__construct();
		$this->setTable('parroqueas');
		$this->gsbd->executeInsert('
			CREATE TABLE parroqueas ( 
				parroquea_id INT,
				nombre varchar(100),
				municipio_id INT,
				PRIMARY KEY (parroquea_id),
				FOREIGN KEY (municipio_id) REFERENCES municipios (municipio_id)
			); 
		');
	}	

	public function down()
	{
		$this->dropIfExist('parroqueas');
	}

}