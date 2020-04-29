<?php 

/*
* @author Edward Romero
* @date 18-04-2020 
* esta seccion trae un array con todos los recursos en app a requerir, exceptos las vistas
* | [name] aqui van a ir todos los controladores creados para cargarlos automaticamentes
* | [type]  es el nombre de la carpeta y por ende va el tipo de archivo o el fin de tal archivo
* | [files] aquí esta un array con el contenido que se desea requerir.
* | ATENCION! estos archivos solo se requeriran, no seran instanciados por razones de seguridad y rendimiento
*/

$files = [
	[
		'type' => 'controller',
		'name' => 'Controller',
		'files'=> ['index','user']
	],
	[
		'type' => 'model',
		'name' => 'Model',
		'files'=> ['usuario']
	],
	[
		'type' => 'helpers',
		'name' => 'Helper',
		'files'=> ['managerError','request','sessionManager']
	]
];