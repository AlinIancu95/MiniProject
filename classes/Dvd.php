<?php

class Dvd extends Base
{
    public $sku;

    public $name;

    public $price;

    public $size;

    public function cardProduct()
    {
        $productHtml = '<div class="col-3">
                        <div class="card cardMain">
                            <div>
                                <input type="checkbox" class="delete-checkbox" name="'.strtolower(get_class($this)).'[]" value="'.$this->getId().'">
                            </div>
                            <div class="card-body cardBody">
                                <span>'.$this->sku.'</span>
                                <br>
                                <span>'.$this->name.'</span>
                                <br>
                                <span>'.$this->price.' $</span>
                                <br>
                                <span>Size: '.number_format($this->size,0,",",".").' MB</span>
                            </div>
                        </div>
                    </div>';

        echo $productHtml;
    }

    public static function getTableName()
    {
        return 'dvds';
    }
}