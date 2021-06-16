<?php

include_once __DIR__ . "/../Model/Product.php";
class ClassInfoHelper
{
    static $refObj;

    public function __construct($object = 'Product')
    {
        self::$refObj = new ReflectionClass($object);
    }

    public static function getMethods()
    {
        return var_dump(self::$refObj->getMethods());
    }
    
    public static function getVariables()
    {
        return var_dump(self::$refObj->getProperties());   
    }

    
}