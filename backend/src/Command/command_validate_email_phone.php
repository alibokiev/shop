<?php

include_once __DIR__ . "/../../../common/src/Service/Validator.php";

$test = new Validator(); 

($test::emailValidate('ali_01@mail.ru')) ? print "Email-ok!" : print "Encorrect email!";

($test::phoneValidate('+992(88)00-11-012')) ? print "Phone-ok" : print "Encorrect phone!";

