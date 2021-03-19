<?php

    include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";

class MigrationAddProducts
{
    private $conn;

    private $data = [
        [
            'id' => 'null',
            'title' => 'Ноутбук',	
            'picture' => '01.png',	
            'preview' => 'New Asus Laptop N 751 JK',
            'content' => 'LMF;LB;,B 89789798',
            'price' => '7600',	
            'status' => '5',	
            'created' => '2021-01-22 14:27:11',	
            'updated' => '2021-01-22 15:36:35'
        ],
        [
            'id' => 'null',
            'title' => 'Ноутбук2',	
            'picture' => '02.png',	
            'preview' => 'New Asus Laptop N 751 JK',
            'content' => 'LMF;LB;,B 89789798',
            'price' => '7600',	
            'status' => '5',	
            'created' => '2021-01-22 14:27:11',	
            'updated' => '2021-01-22 15:36:35'
        ],
        [
            'id' => 'null',
            'title' => 'Ноутбук3',	
            'picture' => '03.png',	
            'preview' => 'New Asus Laptop N 751 JK',
            'content' => 'LMF;LB;,B 89789798',
            'price' => '7600',	
            'status' => '5',	
            'created' => '2021-01-22 14:27:11',	
            'updated' => '2021-01-22 15:36:35'
        ],
        [
            'id' => 'null',
            'title' => 'Ноутбук5',	
            'picture' => '04.png',	
            'preview' => 'New Asus Laptop N 751 JK',
            'content' => 'LMF;LB;,B 89789798',
            'price' => '7600',	
            'status' => '5',	
            'created' => '2021-01-22 14:27:11',	
            'updated' => '2021-01-22 15:36:35'
        ],
        [
            'id' => 'null',
            'title' => 'Ноутбук5',	
            'picture' => '05.png',	
            'preview' => 'New Asus Laptop N 751 JK',
            'content' => 'LMF;LB;,B 89789798',
            'price' => '7600',	
            'status' => '5',	
            'created' => '2021-01-22 14:27:11',	
            'updated' => '2021-01-22 15:36:35'
        ]
    ];

    public function __construct(DBConnector $connector)
    {
        $this->conn = $connector->connect();
    }

    public function commit()
    {
        foreach ($this->data as $product){
           
            $result = mysqli_query($this->conn, "INSERT INTO products VALUES (
                " . $product['id'] . ",
                '" . $product['title'] . "',
                '" . $product['picture'] . "',
                '" . $product['preview'] . "',
                '" . $product['content'] . "',
                '" . $product['price'] . "',
                '" . $product['status'] . "',
                '" . $product['created'] . "',
                '" . $product['updated'] . "')");

            if (!$result){
                print mysqli_error($this->conn) . PHP_EOL;
            }
        }
    }

    public function rollback()
    {
        $result = mysqli_query($this->conn, "TRUNCATE TABLE products");
       
        if(!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }
    }
}