<?php

class ProductValidation
{
    public static function validate()
    {
        $rejObj = new ReflectionClass('Product');
        $properties = $rejObj->getProperties();

        foreach($properties as $property){
            $comment = $property->getDocComment();

            if(!empty($comment) && $_POST[$property->getName()]){
                if(!ValidationService::validate($comment, $_POST[$property->getName()])){
                    return false;
                }
            }
        }

        return true;
    }
}