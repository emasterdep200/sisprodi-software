<?php 
// datos para conectar a la base de datos y crear las tablas
require_once 'sigepadi/core/database/abstraccionDatabase.php';
require_once 'sigepadi/core/database/managerTableDatabase.php';
require_once 'sigepadi/core/database/manipulationRowDatabase.php';
require_once 'sigepadi/core/database/conetion.php';
require_once 'sigepadi/config/database.php';
require_once 'sigepadi/config/global.php';

// folder ] -> manager
require_once 'manager/managerMigration.php';
require_once 'manager/config/autoloadMigration.php';
require_once 'manager/migration.php';

// database insert
require_once 'databases/insert/generalDataInsert.php';