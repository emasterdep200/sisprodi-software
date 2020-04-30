<?php 

namespace Config\Database;

function returnArrayConfig()
{
	return $setting = array(
		'database_gsdb' 	=> 'mysql',
		'database_username' => 'root',
		'database_host' 	=> 'localhost',
		'database_password' => 'root',
		'database_name' 	=> "sisprodi",
		'database_charset'	=> "utf8"
	);	
}

