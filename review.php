<?php 

class Product {

    public $price;

    public function __construct($price) {
        $this->price = $price;
    }

}

$product = new Product(500);
echo $product->price;

?>