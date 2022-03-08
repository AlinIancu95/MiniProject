<?php

class Book extends Base
{
    public $weight;

    public $productId;

    public static function getTableName()
    {
        return 'books';
    }
}