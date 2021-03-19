<?php

include_once __DIR__ . "/AbstractModel.php";
include_once __DIR__ . "/../Service/DBConnector.php";
class Permission extends AbstractModel
{
    public $permission;

    private $conn;

    public function __construct( 
        $permission = null)
    {
        $this->conn = DBConnector::getInstance()->connect();

        $this->permission = $permission;
    }

    public function save()
    {
            $query = "INSERT INTO rbac_permission VALUES 
            ('" . $this->permission . "')";
        
         $result = mysqli_query($this->conn, $query); 

         if(!$result){
             throw new Exception(mysqli_error($this->conn),400);
         }
    }

    public function all()
    { 
        $permissions = [];
        $result = mysqli_query($this->conn , "SELECT * FROM rbac_permission");
        foreach(mysqli_fetch_all($result, MYSQLI_ASSOC) as $item){
            $permissions[] = $item['permission'];
        }
       
       return $permissions;
    }

    public function deleteByName($name)
    { 
        $result = mysqli_query($this->conn , "DELETE FROM rbac_permission WHERE permission = '$name'");
        if(!$result){
            throw new Exception(mysqli_error($this->conn),400);
        }
    }
}