<?php

include_once __DIR__. "/../../../common/src/Service/UserService.php";
include_once __DIR__. "/../../../common/src/Service/OrderService.php";
include_once __DIR__. "/../../../common/src/Service/BasketDBService.php";
include_once __DIR__. "/../../../common/src/Model/Order.php";
include_once __DIR__. "/../../../common/src/Model/OrderItem.php";

class OrderController
{
    private $basketService;

    private $conn;
    public function __construct($conn = null)
    {
        if(!empty($conn)) {
            $this->conn = $conn; 
            $this->basketService = new BasketDBService($conn);
        }else{
            $this->basketService = new BasketDBService();
        }
    }
    public function index()
    {
        include_once __DIR__ . "/../../views/order/form.php";
    }

    public function create()
    {
        if(!empty($_POST)){
            $name = htmlspecialchars($_POST['name']);
            $phone = htmlspecialchars($_POST['phone']);
            $email = htmlspecialchars($_POST['email']);
            $delivery = intval($_POST['delivery']);
            $payment = intval($_POST['payment']);
            $comment = htmlspecialchars($_POST['comment']);
            $userId = UserService::getCurrentUser()['id'] ?? 0;
            $total = 0;
            $status = OrderService::STATUS_NEW;
            $updated = date('Y-m-d H:i:s', time());

            $order = new Order(
                null, $userId, $total, 
                $payment,  $delivery, $comment, 
                $name, $phone, $email, $status, $updated);
            
            if(!empty($this->conn)){
                $order->setConn($this->conn);
            }

            $orderId=$order->save();
        }
        
        if(empty($orderId)){
            throw new Exception("Order Id is null!",400);
        }

        $basketId = $this->basketService->getBasketIdByUserId($userId);
        $items =  $this->basketService->getBasketProducts($basketId);

        if(empty($items)){
            throw new Exception("Basket is empty!",400);
        }

        foreach($items as $item){
            $orderItem = new OrderItem($orderId,intval($item['product_id']),intval($item['quantity']));
            if(!empty($this->conn)){
                $orderItem->setConn($this->conn);
            }
            $orderItem->save();
        }

        $this->basketService->clearBasket($basketId, $this->conn);

        header("Location: /?model=order&action=success&order_id=" . $orderId);
    }

    public function success()
    {
        $orderId = intval($_GET['order_id']);

        include_once __DIR__ . "/../../views/order/success.php";
    }
}