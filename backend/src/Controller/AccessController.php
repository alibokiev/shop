<?php

include_once __DIR__."/AbstructController.php";
include_once __DIR__ . "/../../../common/src/Model/Role.php";
include_once __DIR__ . "/../../../common/src/Model/Permission.php";
include_once __DIR__ . "/../../../common/src/Model/Access.php";

class AccessController extends AbstructController
{
    public function save() 
    {
        if(!empty($_POST)){
            if((new Access())->clear()){
                if((new Access())->createAll($_POST['access'] ?? [])){
                    header("Location: /?model=access&action=update");
                    die();
                }
            }  
        }        
    }

    public function read()
    {
        
    }

    public function create()
    {
       
    }

    public function update()
    {
        $roles = (new Role())->all();
        $permissions = (new Permission())->all();

        $accesses = [];
        foreach ((new Access())->all() as $item){
            $accesses[$item['role']][$item['permission']] = true;
        }
        
        include_once __DIR__ . "/../../views/access/form.php";
    }

    public function delete()
    {
       
    }
}