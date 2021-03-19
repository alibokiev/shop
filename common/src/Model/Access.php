<?php

include_once __DIR__ . "/../Service/DBConnector.php";

class Access extends AbstractModel
{

   public function __construct()
   {
    parent::__construct();  
   }

   public function all()
   {
       $result = mysqli_query($this->conn , "SELECT * FROM rbac_access");
       return mysqli_fetch_all($result, MYSQLI_ASSOC);      
   }
   
   public function clear()
   {
       $result = mysqli_query($this->conn , "TRUNCATE TABLE rbac_access");

       if(!$result){
           throw new Exception(mysqli_error($this->conn));
       }

       return true; 
   }

   public function createAll(array $data=[])
   {
        if(empty($data))  {
            throw new Exception('Empty Access Data!');
        }

        $accesses = [];

        foreach($data as $role=>$perms){
            foreach($perms as $permission=>$value){
                if ($value === 'on') $accesses[] = sprintf("('%s','%s')", $role, $permission);
            }
        }

        if(empty($accesses)){
            throw new Exception('Empty Data For Access Insert!');
        }

        $query = "INSERT INTO rbac_access values " . implode(',',$accesses);

        $result = mysqli_query($this->conn , $query);

       if(!$result){
           throw new Exception(mysqli_error($this->conn));
       }
       return true; 
   }

}