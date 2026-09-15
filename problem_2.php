<?php 

$product_1 = 350;
$product_2 = 425;
$product_3 = 299;

$totalProduct = $product_1 + $product_2 + $product_3;

if ($totalProduct >= 1000){
    echo "Original Price: " . $totalProduct . "<br>";
    $discount = $totalProduct * 0.10;
    $discountAmount = $totalProduct * (10 / 100);
    echo "Discount Amount: " . $discountAmount. "<br>";
    echo "Total: " . $amount = $totalProduct - $discount;
}else{ 
    echo $totalProduct;
}


?>