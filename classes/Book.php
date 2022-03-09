<?php

class Book extends Base
{
    public $sku;

    public $name;

    public $price;

    public $weight;

    public $productId;

    public static function getTableName()
    {
        return 'books';
    }
}