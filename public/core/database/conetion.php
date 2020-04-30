<?php 

namespace Core\Database\DB;

use App\Helpers\ManagerError;
use Config\Database;
use \PDO;

function conectar()
{
	$setting = Database\returnArrayConfig();
	try{
		$dns = "".$setting['database_gsdb'].":host=".$setting['database_host'].";dbname=".$setting['database_name'].";";
		$db = new PDO($dns,$setting['database_username'],$setting['database_password']);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// $db->exec("SET CHARACTER SET "-$setting['database_charset']);
		return $db;
	} catch(Exception $e){			
			die('Error'.$e->getMessage());
			$error = new ManagerError\ManagerError('Falla al conectar con la base de datos',$e->getLine(),'dev');		
	}
}
