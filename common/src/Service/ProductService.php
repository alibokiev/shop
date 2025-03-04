<?php

class ProductService
{
    public function getBasketItems($items)
    {
        $total = 0;
        foreach ($items as $key=>$item){
            // TODO Need Left Join
            $items[$key]['product']=(new Product())->getById($item['product_id']);
            $items[$key]['product']['total']=$items[$key]['product']['price']*$items[$key]['quantity'];
            $total += $items[$key]['product']['total'];
        }
        return [
            'items' => $items,
            'total' => $total
        ];
    }
}