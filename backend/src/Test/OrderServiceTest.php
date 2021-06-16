<?php

include_once __DIR__ . "/AbstractTest.php";
include_once __DIR__ . "/../Fixtures/Fixture01.php";
include_once __DIR__ . "/../Fixtures/FixtureOrders.php";
include_once __DIR__ . "/../Fixtures/FixtureOrderItem.php";
include_once __DIR__ . "/../../../common/src/Model/Order.php";
include_once __DIR__ . "/../../../common/src/Service/OrderService.php";

class OrderServiceTest extends AbstractTest
{
    public function testCalcTotal()
    {
        $this->createTableByName('products');
        $this->createTableByName('orders');
        $this->createTableByName('order_item');

        $fixture = new Fixture01($this->conn);
        $fixture->run();
        $fixtureOrders = new FixtureOrders($this->conn);
        $fixtureOrders->run();
        $fixtureOrderItem = new FixtureOrderItem($this->conn);
        $fixtureOrderItem->run();

        $orderService = new OrderService();

        $orderObject = new Order();
        $orderObject->setConn($this->conn->connect());

        $quantityAndProducts = $orderObject->getProductsAndQuantityByOrderId(1);


        if(!method_exists($orderService, 'calcTotal')){
            print "Error: calcTotal is not exists" . PHP_EOL;
            die('Test was crashed!');
        }

        $total = $orderService->calcTotal($quantityAndProducts);

        if(2600 !== $total){
            print "Error: calcTotal is not correct" . PHP_EOL;
            die('Test was crashed!');
        }

        $this->dropTableByName('products');
        $this->dropTableByName('orders');
        $this->dropTableByName('order_item');
    }
}