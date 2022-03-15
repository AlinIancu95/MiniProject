<?php

class Furniture extends Base
{
    public $sku;

    public $name;

    public $price;

    public $height;

    public $width;

    public $length;

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
                                <span>Dimensions: '.$this->height.'x'.$this->width.'x'.$this->length.'</span>
                            </div>
                        </div>
                    </div>';

        echo $productHtml;
    }

    public static function getTableName()
    {
       return 'furnitures';
    }
}