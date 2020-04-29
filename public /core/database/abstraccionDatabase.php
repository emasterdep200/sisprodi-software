<?php 

namespace Core\Database\AbstractModel;

	use Core\Database\DB;
	use App\Helpers\ManagerError;
	use \PDO;
	/**
	 * @author Edward 
	 * @return array fetch
	 * esta clase se emcarga de manejar los datos más bajos de la consulta, hasta la ejecucion de la consulta
	 */

	

	class AbstractModel 
	{
		private $conection;

		private $query;

		protected $data;

		protected $table;

		protected $wordQuery= [];
		
		public function __construct()
		{
			$this->conection = DB\conectar();
		}

		protected function constructQuery()
		{
			try 
			{
				$this->data = $this->conection->prepare($this->query);
				$this->data->execute();
			} 
			catch (Exception $e) 
			{
				die($e->getMessage());
				$error = new ManagerError\ManagerError('Fallo al ejecutar la consulta',$this->query,'dev');		
			}
		}

		/*
		* | funccion para hacer el select, llena el constructor de consulta
		* @param row { array }
		*/
		public function get($arrayRow=' * ')
		{
			$this->wordQuery[] = 'SELECT FROM ';
			if ( count($arrayRow) > 0 ) {
				foreach ($arrayRow as $row) {
				$this->wordQuery[] = $row;
			}
			} else {
				$this->wordQuery[] = $arrayRow;
			}
			$this->wordQuery[] = $this->table;
		}

		/*
		* @param row {String}
		* @param type {String}
		* escargada de hacer un orderby de los datos que se solicitan
		*/
		public function orderBy($row,$type)
		{
			$this->wordQuery[] = ' ORDER BY ';
			$this->wordQuery[] = $row;
			$this->wordQuery[] = $type;
		}

		/*
		* @param id {int}
		* busca una tupla de datos en especifico
		*/
		public function find($id)
		{
			$this->wordQuery[] = "SELECT FROM * $this->table WHERE id=$id ";
		}

		/*
		* @param row {string}
		* @param signo {String}
		* @param value {String}
		* funcion para establecer una consulta where en la base de datos
		*/
		public function where($row,$signo,$value)
		{
			$this->wordQuery[] = " WHERE $row $signo '$value'";
		}


		/*
		* @param id {int}
		* @param row {String}
		* @param value {String}
		* function para borrar un elemento por su id o si se pasa el row y value, 
		* borrara por campo de la tabla
		*/
		public function delete($id,$row='',$value='')
		{
			if ( empty($row) ) {
				$this->wordQuery[] = "DELETE FROM $this->table WHERE id=$id ";
			} else {
				$this->wordQuery[] = "DELETE FROM $this->table WHERE $row=$value ";
			}
		}

		/*
		* funcion para construir la consultar sql y luego ejecutarla
		*/
		public function apply()
		{
			foreach ($this->wordQuery as $word) {
				$this->query .= "".$word."";
			}
			echo "\t ".$this->query." \t";
			$this->constructQuery();
		}

		/* 
		* para ejecuar sql nativo
		*/
		public function SQL($sql)
		{
			try 
			{
				$this->data = $this->conection->prepare($sql);
				$this->data->execute();
				return $this->data;	
			} 
			catch (Exception $e) 
			{
				die($e->getMessage());
				$error = new ManagerError\ManagerError('Fallo al ejecutar la consulta',$this->query,'dev');		
			}
		}

		/*
		* para obtener registros de la consulta
		*/
		public function returnQuery()
		{
			try 
			{
				$this->data = $this->conection->prepare($this->query);
				$this->data->execute();
				return $this->data->fetch(PDO::FETCH_OBJ);
			} 
			catch (Exception $e) 
			{
				die($e->getMessage());
				$error = new ManagerError\ManagerError('Fallo al ejecutar la consulta',$this->query,'dev');		
			}			
		}

		public function __destruct()
		{
			$this->conection = null;
		}

	}
