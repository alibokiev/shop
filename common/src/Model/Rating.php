<?php

include_once __DIR__ . "/../Service/DBConnector.php";
include_once __DIR__ . "/AbstractModel.php";
include_once __DIR__ . "/../Service/UserService.php";
class Rating
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $productId;
    /**
     * @var float
     */
    public $rating = 2;

    
}    