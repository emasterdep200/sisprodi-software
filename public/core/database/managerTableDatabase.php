<?php 

namespace Core\Database\ManagerTable;

use Core\Database\AbstractModel\AbstractModel;

class ManagerTable extends AbstractModel
{

	public function create()
	{
		$this->apply();
	}

	public function setTable($table)
	{
		$this->table = $table;
	}

	public function string($row,$long=null)
	{
		$this->wordQuery[] = ' $row String ';//mejorar
	}

	public function createTable()
	{
		$this->wordQuery[] = 'CREATE TABLE '.$this->table.' ( ';
	}

	public function isVarchar($row,$value=225)
	{
		$this->wordQuery[] = ' '.$row.' VARCHAR('.$value.') ';
	}

	public function int($row)
	{
		$this->wordQuery[] = ' '.$row.' INT ';
	}

	public function float($row)
	{
		$this->wordQuery[] = ' '.$row.' FLOAT ';
	}

	public function noNull()
	{
		$this->wordQuery[] = ' NOT NULL ';	
	}

	public function unique()
	{
		$this->wordQuery[] = ' UNIQUE ';	
	}

	public function jump()
	{
		$this->wordQuery[] = ' ,';
	}

	public function end()
	{
		$this->wordQuery[] = ' );';
	}

	public function primary($row)
	{
		$this->wordQuery[] = ' );';//buscar como se compone y añadir la foreign key
	}

	public function isPrimary()
	{
		$this->wordQuery[] = ' PRIMARY KEY ';
	}

	public function dropTable()
	{
		$this->wordQuery[] = 'DROP TABLE IF EXISTS '.$this->table;
	}

	public function textType($row)
	{
		$this->wordQuery[] = ' '.$row.' TEXT ';	
	}

	public function executeInsert($sql)
	{
		$this->SQL($sql);
	}
}
