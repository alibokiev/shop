<?php

include_once __DIR__ . "/../../../common/src/Service/DataHelper.php";

$fileName = 'products_' . date('YmdHis', time()) . '.csv';
$path = __DIR__ . '/../../../data/';
$file = $path . $fileName;

$list[]=[[23,34,45,67,89],[98,87,65,43,21]];

(new DataHelper())->saveArrayToCsvFile($list,$file);

(new DataHelper())->getArrayFromCsvFile($file);

die("True!") ;
