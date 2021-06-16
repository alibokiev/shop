<?php

class AnnotationHelper
{
    public static function defineValueByAnnotation($annotationName, $annotation)
    {
        foreach(explode(PHP_EOL, $annotation) as $line){
            if (strpos($line, '@' . $annotationName) !== false){
                $param = substr($line, strpos($line, '@' . $annotationName)
                + strlen('@' . $annotationName));
                
                return trim($param);
            }
        }

        return 'string';
    }
}
