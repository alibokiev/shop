<?php

include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";

class FixtureBasketItem
{
    private $conn;

    private $data = [
        [
            'id' => 'null',
            'basket_id' => '1',	
            'product_id' => '1',	
            'quantity' => '2'
        ],
        [
            'id' => 'null',
            'basket_id' => '1',	
            'product_id' => '2',	
            'quantity' => '2'
        ],
        [
            'id' => 'null',
            'basket_id' => '3',	
            'product_id' => '3',	
            'quantity' => '2'
        ],
        [
            'id' => 'null',
            'basket_id' => '4',	
            'product_id' => '4',	
            'quantity' => '2'
        ],
        [
            'id' => 'null',
            'basket_id' => '5',	
            'product_id' => '5',	
            'quantity' => '2'
        ],
        [
            'id' => 'null',
            'basket_id' => '6',	
            'product_id' => '6',	
            'quantity' => '2'
        ],
        [
            'id' => 'null',
            'basket_id' => '1',	
            'product_id' => '2',	
            'quantity' => '2'
        ],
        [
            'id' => 'null',
            'basket_id' => '8',	
            'product_id' => '7',	
            'quantity' => '2'
        ],
        [
            'id' => 'null',
            'basket_id' => '9',	
            'product_id' => '8',	
            'quantity' => '2'
        ],
        [
            'id' => 'null',
            'basket_id' => '0',	
            'product_id' => '0',	
            'quantity' => '2'
        ]
    ];
    public function __construct(DBConnector $conn)
    {
        $this->conn = $conn->connect();
    }
    public function run()
    {
        foreach($this->data as $product){

            $result = mysqli_query($this->conn, "INSERT INTO basket_item VALUES (
                " . $product['id'] . ",
                '" . $product['basket_id'] . "',
                '" . $product['product_id'] . "',
                '" . $product['quantity'] . "')");

            if (!$result){
                print mysqli_error($this->conn) . PHP_EOL;
            }
        }
    }
}