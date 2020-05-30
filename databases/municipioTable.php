<?php 

use Core\Database\ManagerTable\ManagerTable;
use Manager\Migration\Migration;

class MunicipioTable extends Migration
{

	public function up()
	{
		parent::__construct();
		$this->setTable('municipios');
		$this->gsbd->executeInsert('
			CREATE TABLE municipios ( 
				municipio_id INT,
				nombre varchar(100),
				estado_id INT,
				PRIMARY KEY (municipio_id),
				FOREIGN KEY (estado_id) REFERENCES estados (estado_id)
			); 
		');
	}	

	public function down()
	{
		$this->dropIfExist('municipios');
	}

}