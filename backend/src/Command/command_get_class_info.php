<?php

include_once __DIR__ . "/../../../common/src/Service/ClassInfoHelper.php";

$test = new ClassInfoHelper(); 

$test::getMethods();
$test::getVariables();

die("True!") ;
