<?php

class Furniture extends Base
{
    public $sku;

    public $name;

    public $price;

    public $height;

    public $witdh;

    public $length;

    public $productId;

    public static function getTableName()
    {
       return 'furnitures';
    }
}