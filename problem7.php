<?php 

$currentBalance = 43000;
$withdraw = 10000;

if ($withdraw <= $currentBalance){
    $balance = $currentBalance - $withdraw;

    echo "10000" . "<br>";
    echo "Remaining Balance: " . $balance;

}else {
    echo "Insuffecient Balance";
}



?>