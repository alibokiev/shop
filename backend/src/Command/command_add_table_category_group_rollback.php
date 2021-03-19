<?php

include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";
include_once __DIR__ . "/../Migrations/202102282000_migration_add_category_group.php";

$dbConnector = DBConnector::getInstance();
$migration = new MigrationAddcategoryGroup($dbConnector);
$migration->rollback();

die("True");
