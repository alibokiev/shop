<?php

include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";
include_once __DIR__ . "/../../../common/src/Service/ExportService.php";

ExportService::export();

die("True");
