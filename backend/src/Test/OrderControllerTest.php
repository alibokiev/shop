<?php

include_once __DIR__ . "/AbstractTest.php";
include_once __DIR__ . "/../Fixtures/FixtureBasket.php";
include_once __DIR__ . "/../Fixtures/FixtureOrders.php";
include_once __DIR__ . "/../Fixtures/FixtureOrderItem.php";
include_once __DIR__ . "/../Fixtures/FixtureBasketItem.php";
include_once __DIR__ . "/../../../frontend/src/Controller/OrderController.php";

class OrderControllerTest extends AbstractTest
{
    public function testCreate()
    {
        try {
            
        $this->dropTableByName('basket');
        $this->dropTableByName('basket_item');
        $this->dropTableByName('products');
        $this->dropTableByName('user');
        $this->dropTableByName('orders');
        $this->dropTableByName('order_item');
        } catch (Exception $e){}

        $this->createTableByName('basket');
        $this->createTableByName('basket_item');
        $this->createTableByName('user');
        $this->createTableByName('products');
        $this->createTableByName('orders');
        $this->createTableByName('order_item');

        $this->copyTableByName('user');
        $this->copyTableByName('products');

        (new FixtureBasket($this->conn))->run();
        (new FixtureBasketItem($this->conn))->run();

        $_POST = [
            'name'=>'Aliiii',
            'phone'=>'123-123-123',
            'email'=>'mail@mail.ru',
            'delivery'=>'2',
            'payment'=>'2',
            'comment'=>'Comment111'
        ];  
        $orderController = new OrderController($this->conn->connect());
        $orderController->create();

        $orders = (new Order())->setConn($this->conn->connect())->all();

        if(sizeof($orders) !== 1){
            print "Error: wrong orders count" . PHP_EOL;
            die('Test was crashed!');
        }

        $order = reset($orders);
        foreach(['email' => $_POST['email'],'phone' => $_POST['phone'],'phone' => $_POST['phone']] as $key=>$value){
            if($order[$key] !== $value){
                print "Error: wrong value " . $key . PHP_EOL;
                die('Test was crashed!');
            }
        }

        $orderItems = (new OrderItem())->setConn($this->conn->connect())->getByOrderId($order['id']);

        if(sizeof($orderItems) !== 3){
            print "Error: wrong orderItems count" . PHP_EOL;
            die('Test was crashed!');
        }

        foreach($orderItems as $orderItem){
            if(!in_array($orderItem['product_id'],[1,2,7])){
                print "Error: wrong orderItems id = " . $orderItem['product_id'] . PHP_EOL;
                die('Test was crashed!');
            }   
        }


        $_POST = [];
        $this->dropTableByName('basket');
        $this->dropTableByName('basket_item');
        $this->dropTableByName('products');
        $this->dropTableByName('user');
        $this->dropTableByName('orders');
        $this->dropTableByName('order_item');
    }
}