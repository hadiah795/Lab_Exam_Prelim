<?php 

$num = 24;

if ($num > 0) {
    echo "Positive". "<br>";

    if ($num % 2 == 0) {
        echo "Even";
    } else {
        echo "Odd";
    }
}
else if ($num < 0) {
    echo "Negative";
}
else {
    echo "Zero";
}

?>