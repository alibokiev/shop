<?php

include_once __DIR__ . "/../Service/DBConnector.php";
class Payment extends AbstractModel
{
    public $id;
    public $title;
    public $code;
    public $priority;

    public function __construct( 
        $id = null,
        $title= null,
        $code= null,
        $priority= null)
    {
        parent::__construct();

        $this->id = $id;
        $this->title = $title;
        $this->code = $code;
        $this->priority = $priority;
    }

    public function save()
    {
        if ($this->id > 0) {
            $query = "UPDATE payment SET 
            title = '" . $this->title . "',
            code = '". $this->code ."', 
            priority ='". $this->priority ."' where id = ". $this->id ." limit 1";
        } else {
            $query = "INSERT INTO payment VALUES 
            (null, 
            '" . $this->title . "',
            '" . $this->code . "', 
            '" . $this->priority . "')";
        }
        
         $result = mysqli_query($this->conn, $query);
         
         if(!$result){
             throw new Exception(mysqli_error($this->conn),400);
         }
    }

    public function all()
    { 
        $result = mysqli_query($this->conn , "SELECT * FROM payment");
        return  mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $result = mysqli_query($this->conn , "SELECT * FROM payment WHERE id = $id LIMIT 1");
        $one = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return reset($one);
    }

    public function deleteById($id)
    {
        mysqli_query($this->conn , "DELETE FROM payment WHERE id = $id LIMIT 1");
    }
}