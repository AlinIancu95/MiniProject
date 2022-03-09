<?php

class Dvd extends Base
{
    public $sku;

    public $name;

    public $price;

    public $size;

    public $productId;

    public static function getTableName()
    {
        return 'dvds';
    }
}