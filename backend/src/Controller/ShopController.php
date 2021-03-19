<?php

include_once __DIR__."/AbstructController.php";
include_once __DIR__ . "/../../../common/src/Model/Shop.php";

class ShopController  extends AbstructController
{
    public function save() 
    {
        if(!empty($_POST)){

            $now = date('Y-m-d H:i:s', time());

            $shop = new Shop(
                intval($_POST['id']),
                htmlspecialchars($_POST['title']),
                htmlspecialchars($_POST['address']),
                $now,
                $now
            );

            $shop->save();
        } 
        return $this->read();
    }

    public function read(){

        $all = (new Shop())->all();

        include_once __DIR__ . "/../../views/shop/list.php";
    }

    public function create()
    {
        include_once __DIR__ . "/../../views/shop/form.php";
    }

    public function update(){
        $id = (int)$_GET['id'];

        if (empty($id)) die('Undefined ID !!!');

        $one = (new Shop())-> getById($id);

        if (empty($one)) die('Shop not found !!!');

        include_once __DIR__ . "/../../views/shop/form.php";
    }

    public function delete()
    {
        $id = (int)$_GET['id'];
        (new Shop())->deleteById($id);
        return $this->read();
    }
}