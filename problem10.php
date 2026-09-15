<?php 

$product = ["Coke", "Reese's", "KitKat", "Piattos", "Cadburry"];
$price = [75, 135, 55, 19, 165];

$total = 0;
$cheapest = $price[0];
$mostExpensive = $price[0];

for ($i = 0; $i < count($price); $i++) {
    $total += $price[$i];

    if ($price[$i] < $cheapest) {
        $cheapest = $price[$i];
    }

    if ($price[$i] > $mostExpensive) {
        $mostExpensive = $price[$i];
    }
}

$average = $total / count($price);

echo "<br>Cheapest Product: " . $product[array_search($cheapest, $price)] . " - Price: " . $cheapest;
echo "<br>Most Expensive Product: " . $product[array_search($mostExpensive, $price)] . " - Price: " . $mostExpensive;
echo "<br>Average Price: " . $average;



?>