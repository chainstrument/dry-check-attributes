<?php 

namespace App\DryCheckAttributes;

class ProductService
{

    protected $productAttributes = [
        'color',
        'size',
        'type'
    ];

    public function checkProduct(Product $product)
    {
        if($this->checkAttributes($product)){
            return true;
        }
    }

    public function checkAttributes($product)
    {
        foreach($this->productAttributes as $attribute )
        {
            if(!isset($product->{$attribute}))
            {
                throw new \Exception(
                    sprintf(
                        'Error : the attributes %s is missing',
                        $attribute  
                    )
                    );
            }
        }
    }


}