<?php 
require_once 'core/autoload.php';
require_once 'config/global.php';
require_once 'config/database.php';

use Core\Frontal;

$url = explode('/', substr($_SERVER['REQUEST_URI'],1, strlen($_SERVER['REQUEST_URI']) - 1));

// la instancia principal de la aplicacion, encargada de manear los pedidos del usuario
$frontal = new Frontal\Frontal($url);
