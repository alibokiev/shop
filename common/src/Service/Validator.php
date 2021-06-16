<?php

class Validator
{
    public static function emailValidate($email)
    {
        $regx = '/^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u';

        if(!preg_match($regx,$email)) return false; 
        return true;
    }

    public static function phoneValidate($phone)
    {
        $regx = '/^(\s*)?(\+)?(\(\d{2,3}\) ?\d|\d)(([ \-]?\d)|( ?\(\d{2,3}\) ?)){3,14}\d(\s*)?$/';

        if(!preg_match($regx,$phone)) return false;
        return true;
    }
}