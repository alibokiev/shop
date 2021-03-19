<?php

include_once __DIR__ . "/../Fixtures/FixtureCategoryProduct.php";
include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";

$connect = DBConnector::getInstance();

$fixture = new FixtureCategoryProduct($connect);
$fixture->run();

die("True!") ;
