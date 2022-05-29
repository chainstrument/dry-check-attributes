<?php 

class ProductService
{

    protected $productAttributes = [
        'color',
        'size',
        'type'
    ];

    public function checkProduct(Product $product)
    {
        if($this->checkAttributes()){
            return true;
        }
    }

    public function checkAttributes()
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