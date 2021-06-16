<?php

include_once __DIR__."/AbstructController.php";
include_once __DIR__ . "/../../../common/src/Model/Category.php";

class CategoryController  extends AbstructController
{
    public function save() 
    {
        if(!empty($_POST)){

            $now = date('Y-m-d H:i:s', time());

            $category = new Category(
                intval($_POST['id']),
                htmlspecialchars($_POST['title']), 
                intval($_POST['group_id']), 
                intval($_POST['parent_id']),
                intval($_POST['prior']),
                $now, 
                $now
            );

            $category->save();
        } 
        return $this->read();
    }

    public function read(){

        $all = (new Category())->all();

        include_once __DIR__ . "/../../views/category/list.php";
    }

    public function create()
    {
        include_once __DIR__ . "/../../views/category/form.php";
    }

    public function update(){
        $id = intval($_GET['id']);

        if (empty($id)) die('Undefined ID !!!');

        $one = (new Category())-> getById($id);

        if (empty($one)) die('Category not found !!!');

        include_once __DIR__ . "/../../views/category/form.php";
    }

    public function delete()
    {
        $id = intval($_GET['id']);
        (new Category())->deleteById($id);
        return $this->read();
    }
}