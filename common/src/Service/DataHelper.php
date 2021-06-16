<?php

include_once __DIR__ . "/../Model/Product.php";

class DataHelper
{
    public function saveArrayToCsvFile($array2x, $file)
    {                
        $fp = fopen($file, 'w');

        foreach($array2x as $fields){
            fputcsv($fp,$fields);
        }

        fclose($fp);
    }

    
    public function getArrayFromCsvFile($file)
    { 
        $fp = fopen($file, 'w');

        $data = array_map('str_getcsv', file($file));

        print_r($data);
    }
}
