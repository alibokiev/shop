<?php

include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";

class Fixture01 
{
    private $conn;

    private $data = [
        [
            'id' => '1',
            'title' => 'Ноутбук',	
            'picture' => '01.png',	
            'preview' => 'New Asus Laptop N 751 JK',
            'content' => 'LMF;LB;,B 89789798',
            'price' => '100',	
            'status' => '5',	
            'created' => '2021-01-22 14:27:11',	
            'updated' => '2021-01-22 15:36:35'
        ],
        [
            'id' => '2',
            'title' => 'Ноутбук02',	
            'picture' => '02.png',	
            'preview' => 'New Asus Laptop N 751 JK',
            'content' => 'LMF;LB;,B 89789798',
            'price' => '600',	
            'status' => '5',	
            'created' => '2021-01-22 14:27:11',	
            'updated' => '2021-01-22 15:36:35'
        ],
        [
            'id' => '3',
            'title' => 'Ноутбук03',	
            'picture' => '03.png',	
            'preview' => 'New Asus Laptop N 751 JK',
            'content' => 'LMF;LB;,B 89789798',
            'price' => '500',	
            'status' => '5',	
            'created' => '2021-01-22 14:27:11',	
            'updated' => '2021-01-22 15:36:35'
        ],
        [
            'id' => '4',
            'title' => 'Ноутбук04',	
            'picture' => '04.png',	
            'preview' => 'New Asus Laptop N 751 JK',
            'content' => 'LMF;LB;,B 89789798',
            'price' => '300',	
            'status' => '5',	
            'created' => '2021-01-22 14:27:11',	
            'updated' => '2021-01-22 15:36:35'
        ],
        [
            'id' => '5',
            'title' => 'Ноутбук05',	
            'picture' => '05.png',	
            'preview' => 'New Asus Laptop N 751 JK',
            'content' => 'LMF;LB;,B 89789798',
            'price' => '1000',	
            'status' => '5',	
            'created' => '2021-01-22 14:27:11',	
            'updated' => '2021-01-22 15:36:35'
        ],
        [
            'id' => '6',
            'title' => 'Ноутбук06',	
            'picture' => '06.png',	
            'preview' => 'New Asus Laptop N 751 JK',
            'content' => 'LMF;LB;,B 89789798',
            'price' => '7000',	
            'status' => '5',	
            'created' => '2021-01-22 14:27:11',	
            'updated' => '2021-01-22 15:36:35'
        ],
        [
            'id' => '7',
            'title' => 'Ноутбук07',	
            'picture' => '07.png',	
            'preview' => 'New Asus Laptop N 751 JK',
            'content' => 'LMF;LB;,B 89789798',
            'price' => '2000',	
            'status' => '5',	
            'created' => '2021-01-22 14:27:11',	
            'updated' => '2021-01-22 15:36:35'
        ],
        [
            'id' => '8',
            'title' => 'Ноутбук08',	
            'picture' => '08.png',	
            'preview' => 'New Asus Laptop N 751 JK',
            'content' => 'LMF;LB;,B 89789798',
            'price' => '500',	
            'status' => '5',	
            'created' => '2021-01-22 14:27:11',	
            'updated' => '2021-01-22 15:36:35'
        ],
        [
            'id' => '9',
            'title' => 'Ноутбук09',	
            'picture' => '09.png',	
            'preview' => 'New Asus Laptop N 751 JK',
            'content' => 'LMF;LB;,B 89789798',
            'price' => '1500',	
            'status' => '5',	
            'created' => '2021-01-22 14:27:11',	
            'updated' => '2021-01-22 15:36:35'
        ],
        [
            'id' => '10',
            'title' => 'Ноутбук10',	
            'picture' => '10.png',	
            'preview' => 'New Asus Laptop N 751 JK',
            'content' => 'LMF;LB;,B 89789798',
            'price' => '2500',	
            'status' => '5',	
            'created' => '2021-01-22 14:27:11',	
            'updated' => '2021-01-22 15:36:35'
        ]
    ];
    public function __construct(DBConnector $conn)
    {
        $this->conn = $conn->connect();
    }
    public function run()
    {
        foreach($this->data as $product){
            copy(__DIR__. "/../../fixtures_pics/" . $product['picture'], __DIR__ . "/../../../uploads/products/" . $product['picture']);

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
}