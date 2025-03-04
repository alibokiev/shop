<?php

include_once  __DIR__ . "/../Model/Basket.php";
include_once  __DIR__ . "/../Model/BasketItem.php";
include_once  __DIR__ . "/../Service/BasketService.php";

class BasketDBService extends BasketService
{
    const TEST_USER_ID = 1;
    private $conn;
    public function __construct($conn=null)
    {
        $this->conn = $conn;
    }

    public static function getBasketByUserId($userId)
    {
        $basket = new Basket($userId);

        if ($basket->getFromDB()==null){
            $basket->userId = $userId;
            $basket->save();
        }

        return $basket->getFromDB();
    }

    public function updateBasketItem($basketId, $productId ,$quantity)
    {
        (new BasketItem($basketId, $productId ,$quantity))->update();
    }

    public function deleteBasketItem($basketId, $productId)
    {
        (new BasketItem())->deleteProductByBasketId($productId , $basketId);
    }

    public function createBasketItem($basketId, $productId, $quantity)
    {
        $item = new BasketItem();
        $item->basketId = $basketId;
        $item->productId = $productId;
        $item->quantity = $quantity;

        $item->save();
    }

    public function getBasketProducts($basketId)
    {
        if(!empty($this->conn)){
            return (new BasketItem())->setConn($this->conn)->getByBasketId($basketId);
        }

       return (new BasketItem())->getByBasketId($basketId);
    }

    public function clearBasket($basketId)
    {
        if(!empty($this->conn)){
            ((new BasketItem())->setConn($this->conn))->clearByBasketId($basketId);
        }

        (new BasketItem())->clearByBasketId($basketId);
    }

    public function getBasketIdByUserId($userId)
    {
        if(!empty($this->conn)){
            return self::TEST_USER_ID;
        }
        return (new Basket($userId))->getFromDB()['id'];
    }

    public static function defineBasketDetails()
    {
        $user = UserService::getCurrentUser();

        if(!isset($user['login'])){
            return [];
        }

        $basket = BasketDBService::getBasketByUserId($user['id']);

        return (new BasketDBService())->getBasketProducts(intval($basket['id']));
    }
}