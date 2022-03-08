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

    public function cardProduct()
    {
        $productHtml = '<div class="col-3">
                        <div class="card cardMain">
                            <div>
                                <label>
                                    <input type="checkbox" class="delete-checkbox">
                                </label>
                            </div>
                            <div class="card-body cardBody">
                                <span>'.$this->sku.'</span>
                                <br>
                                <span>'.$this->name.'</span>
                                <br>
                                <span>'.$this->price.' $</span>
                                <br>
                                <span>'.$this->productType.'</span>
                            </div>
                        </div>
                    </div>';

        echo $productHtml;
    }
}