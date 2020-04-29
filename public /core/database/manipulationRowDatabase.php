<?php 
namespace Core\Database\ManipulationData;

use Core\Database\ManagerTable\ManagerTable;

class ManipulationData extends ManagerTable
{
	
	private $values = [];

	private $row = [];

	private $sql;

	public function setRow($rows)
	{
		foreach ($rows as $row) {
			$this->row[] = $row;
		}
	}

	public function setValue($values)
	{
		foreach ($values as $val) {
			$this->values[] = $val;
		}
	}

	public function insert($table)
	{
		$this->sql = ' INSERT INTO '.$table.' ( ';
		$number = count($this->row);
		foreach ($this->row as $row) {
			$this->sql .=  $row;
			$this->sql .=  ($number == 1) ? ' ' : ', ';
			$number--;
		}
		$number = count($this->values);
		$this->sql .= ') VALUES ( ';
		// inserta los valores 
		foreach ($this->values as $value) {
			$this->sql .=  $value;
			$this->sql .=  ($number == 1) ? ' ' : ', ';
			$number--;
		}		
		$this->sql .= '); ';
	}

	public function start()
	{
		echo "\t ".$this->sql." \t";
		$result = $this->executeInsert($this->sql);
		echo $result;
	}

}
