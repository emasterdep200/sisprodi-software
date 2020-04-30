<?php 
// datos para conectar a la base de datos y crear las tablas
require_once 'public/core/database/abstraccionDatabase.php';
require_once 'public/core/database/managerTableDatabase.php';
require_once 'public/core/database/manipulationRowDatabase.php';
require_once 'public/core/database/conetion.php';
require_once 'public/config/database.php';
require_once 'public/config/global.php';

// folder ] -> manager
require_once 'manager/managerMigration.php';
require_once 'manager/config/autoloadMigration.php';
require_once 'manager/migration.php';

// database insert
require_once 'databases/insert/generalDataInsert.php';