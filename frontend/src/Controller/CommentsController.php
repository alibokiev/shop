<?php

include_once __DIR__ . "/../../../common/src/Model/Comments.php";
include_once __DIR__ . "/../../../common/src/Service/UserService.php";

class CommentsController
{
    public function index()
    {
        header("Content-Type: application/json");

        $productId = intval($_GET['product_id']);

        $all = (new Comments())->getByProductId($productId);
    
        print json_encode($all);
        die();
    }

    public function create()
    {
        try{

            $data = $_POST;

            (new Comments(
                null,
                intval($data['product_id']),
                htmlspecialchars($data['name']),
                htmlspecialchars($data['email']),
                htmlspecialchars($data['avatar']),
                htmlspecialchars($data['text'])
                ))->save();

            print json_encode([
                'result'=>'OK'
            ]);
        }catch(Exception $e){
            throw new Exception(json_encode(['result'=>'error', 'message'=>$e->getMessage()]), 400);
        }
        die();
    }
}