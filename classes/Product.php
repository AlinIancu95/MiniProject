<?php

class Product extends Base
{
    public $sku;

    public $name;

    public $price;

    public $productType;

    public static function getTableName()
    {
        return 'products';
    }
}