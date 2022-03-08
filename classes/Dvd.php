<?php

class Dvd extends Base
{
    public $size;

    public $productId;

    public static function getTableName()
    {
        return 'dvds';
    }
}