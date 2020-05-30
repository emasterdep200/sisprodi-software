<?php 

use Core\Database\ManagerTable\ManagerTable;
use Manager\Migration\Migration;

class SectorTable extends Migration
{

	public function up()
	{
		parent::__construct();
		$this->setTable('sectores');
		$this->gsbd->executeInsert('
			CREATE TABLE sectores ( 
				sector_id INT,
				nombre varchar(100),
				parroquea_id INT,
				PRIMARY KEY (sector_id),
				FOREIGN KEY (parroquea_id) REFERENCES parroqueas (parroquea_id)
			); 
		');
	}	

	public function down()
	{
		$this->dropIfExist('sectores');
	}

}