<?php

include_once  __DIR__ . "/../../../common/src/Service/BasketService.php";
include_once  __DIR__ . "/../../../common/src/Service/BasketSessionService.php";
include_once  __DIR__ . "/../../../common/src/Service/BasketCookieService.php";
include_once  __DIR__ . "/../../../common/src/Service/BasketDBService.php";
include_once  __DIR__ . "/../../../common/src/Service/UserService.php";
include_once  __DIR__ . "/../../../common/src/Service/ProductService.php";
include_once  __DIR__ . "/../../../common/src/Model/BasketItem.php";
include_once  __DIR__ . "/../../../common/src/Model/Basket.php";
include_once  __DIR__ . "/../../../common/src/Model/Product.php";

class BasketController
{
    public $user;
    public $basket;
    public $items;
    public $basketService;

    public function __construct()
    {
        $this->user = UserService::getCurrentUser();

        if(!isset($this->user['login'])){
            throw new Exception('No permision',403);
        }

        $this->basket = BasketDBService::getBasketByUserId($this->user['id']);
        $this->basketService = new BasketDBService();
        // $this->basketService = new BasketSessionService();
        // $this->basketService = new BasketCookieService();

        $this->items = BasketDBService::defineBasketDetails();
    }

    public function addProduct()
    {
        $productId = intval($_POST['product_id']);
        $quantity = intval($_POST['quantity']);

        if(empty($productId) || empty($quantity)){
            throw new Exception("Empty Product!");
        }
        
        foreach($this->items as $item){
            if($item['product_id'] == $productId){
                $this->basketService->updateBasketItem($this->basket['id'], $productId, $quantity);

                $this->redirectToBasket();
                die();
            }
        }

        $this->basketService->createBasketItem($this->basket['id'], $productId,$quantity);

        $this->redirectToBasket();
    }

    public function view()
    {
        $result = (new ProductService())->getBasketItems($this->items);
        $items = $result['items'];
        $total = $result['total'];

        include_once __DIR__."/../../views/basket/view.php";
    }

    public function delete()
    {
        
        $this->basketService->deleteBasketItem(
            intval($this->basket['id']),
            intval($_POST['product_id']));
               
        $this->redirectToBasket();
    }

    public function change()
    {
        $this->basketService->updateBasketItem(
            intval($this->basket['id']),
            intval($_POST['product_id']),
            intval($_POST['quantity']));
            
        $this->redirectToBasket();
    }

    public function redirectToBasket()
    {
        header("location: /?model=basket&action=view");
    }
}