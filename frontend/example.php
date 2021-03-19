<?php

try {
    $b=1;
    $a=2;
    throw new Exception("Bad code", 408);
    $c=3;
    $d=$b+$a;
}catch (Exception $e){
    print "its my exceotion<br>". $e->getMessage() . '(' . $e->getCode() . ',' . $e->getFile() . ',' . $e->getLine() . ')';
    error_log("Bad logggggggg");
}finally {
        print "finally k4kr" ;
}