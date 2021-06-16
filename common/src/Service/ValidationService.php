<?php

include_once __DIR__ . "/AnnotationHelper.php";
class ValidationService
{
    public static function validate($comment, $value)
    {
        $data = AnnotationHelper::defineValueByAnnotation('valid',$comment);
        $data = json_decode($data, true);
        
        foreach($data as $key=>$validateValue){
            switch($key){
                case 'type':
                    return self::typeValidate($validateValue,$value);
                    break;
                case 'maxlength':
                    return self::maxLengthValidate($validateValue,$value);
                    break;
                case 'max':
                    return self::maxValidate($validateValue,$value);
                    break;
                case 'min':
                    return self::minValidate($validateValue,$value);
                    break;
                case 'regx':
                    return self::regxValidate($validateValue,$value);
                    break;
            }
        }
        
        return true;
    }

    public static function typeValidate($validateValue,$value)
    {
        switch($validateValue){
            case 'string':
                if(!is_string($value)){
                    MessageService::setError('Not string! Value = ' . $value) ;
                    return false;
                }
                break;
            case 'int':
                if(!is_numeric($value)){
                    MessageService::setError('Not integer! Value = ' . $value) ;
                    return false;
                }
                break;
        }
        return true;
    }

    public static function maxLengthValidate($validateValue,$value)
    {
        if($validateValue < strlen($value)){
            MessageService::setError('Wrong string length! Value = ' . $value) ;
            return false;
        }
        return true;
    }

    public static function maxValidate($validateValue,$value)
    {
        if($validateValue < intval($value)){
            MessageService::setError('Value more then max! Value = ' . $value) ;
            return false;
        }
        return true;
    }

    public static function minValidate($validateValue,$value)
    {
        if(intval($value) < $validateValue){
            MessageService::setError('Value less then min! Value = ' . $value) ;
            return false;
        }
        return true;
    }

    public static function regxValidate($validateValue,$value)
    {
        if($validateValue==1 && !preg_match("/^(\w)+(?:.jpg|.png)$/",$value)){
            MessageService::setError('No valid picture! Value = ' . $value) ;
            return false;
        }
        return true;
    }
}