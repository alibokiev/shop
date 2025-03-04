<?php 

include_once __DIR__ . "/../../../common/src/Service/UserService.php";
include_once __DIR__ . "/../../../common/src/Model/User.php";
include_once __DIR__ . "/../../../common/src/Service/SecurityService.php";
include_once __DIR__."/Interface/ControllerInterface.php";

abstract class AbstructController  implements ControllerInterface
{
    public function __construct()
    {
        if (!SecurityService::isAuthorized()){
             header("Location: /?model=site&action=login");
            die();
        }

        $currentUser = UserService::getCurrentUser();
        
        $model = htmlspecialchars($_GET['model']);
        $action = htmlspecialchars($_GET['action']);
        
        (new User())->isAccess($currentUser['role'],$model,$action);
        
    }
}
