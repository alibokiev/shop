<?php


class ExportService
{
    private $connect;

    public function __construct()
    {
        $this->connect = DBConnector::getInstance()->connect();  
    }
    public static function export()
    {
        $fileName = 'products_' . date('YmdHis', time()) . '.csv';
        $path = __DIR__ . '/../../../data/';

        file_put_contents($path.$fileName, '');
    }
}