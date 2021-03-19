<?php

    include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";
    include_once __DIR__ . "/../../../common/src/Service/UserService.php";

class MigrationAddcategoryGroup
{
    private $conn;

    public function __construct(DBConnector $connector)
    {
        $this->conn = $connector->connect();
    }

    public function commit()
    {
        $result = mysqli_query($this->conn, "CREATE table category_group(
            id int not null auto_increment,
            title varchar(64) not null,
            primary key(id)
            )engine = InnoDB default charset 'utf8'");

        if (!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }

        $result = mysqli_query($this->conn, "INSERT INTO `category_group` (`title`) VALUES 
        ('Ноутбуки'),
        ('Нетбуки'),
        ('Смартфоны'),
        ('Гарнитуры'),        
        ('Лаптопы'),
        ('Планшеты'),
        ('Аксессуары'),
        ('Клавиатуры'),
        ('Мыши'),
        ('Блоксхемы')");
        

        if (!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }


        $result = mysqli_query($this->conn, "INSERT INTO `categories` (`title`, `group_id`, `parent_id`, `prior`) VALUES 
        ('Asus', '1', '0', '100'),
        ('Acer', '1', '0', '99'),
        ('HP', '1', '0', '98'),
        ('Dell', '1', '0', '97'),
        ('MacBook', '1', '0', '96'),
        ('OS Linux', '1', '0', '95')");


        if (!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }
        
        $result = mysqli_query($this->conn, "CREATE TABLE `category_product` (
            `product_id` INT NOT NULL,
            `category_id` INT NOT NULL
            )engine = InnoDB");


        if (!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }
    }

    public function rollback()
    {
        $result = mysqli_query($this->conn, "DROP TABLE `category_group`");
       
        if(!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }

        $result = mysqli_query($this->conn, "TRUNCATE TABLE `categories`");
       
        if(!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }

        $result = mysqli_query($this->conn, "DROP TABLE `category_product`");
       
        if(!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }
    }
}