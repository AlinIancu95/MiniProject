<?php

class Furniture extends Base
{
    public $height;

    public $witdh;

    public $length;

    public $productId;

    public static function getTableName()
    {
       return 'furnitures';
    }
}