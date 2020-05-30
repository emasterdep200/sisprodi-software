<?php 

use Core\Database\ManagerTable\ManagerTable;
use Manager\Migration\Migration;

class ComunidadTable extends Migration
{

	public function up()
	{
		parent::__construct();
		$this->setTable('comunidades');
		$this->gsbd->executeInsert('
			CREATE TABLE comunidades ( 
				comunidad_id INT,
				nombre varchar(100),
				sector_id INT,
				PRIMARY KEY (comunidad_id),
				FOREIGN KEY (sector_id) REFERENCES sectores (sector_id)
			); 
		');
	}	

	public function down()
	{
		$this->dropIfExist('comunidades');
	}

}