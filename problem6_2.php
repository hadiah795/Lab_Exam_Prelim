<?php

$grade1 = 90;
$grade2 = 85;
$grade3 = 88;
$grade4 = 92;
$grade5 = 87;

$average = ($grade1 + $grade2 + $grade3 + $grade4 + $grade5) / 5;

if ($average >= 90) {
    $result = "Excellent";
} elseif ($average >= 85) {
    $result = "Very Good";
} elseif ($average >= 80) {
    $result = "Good";
} elseif ($average >= 75) {
    $result = "Passed";
} else {
    $result = "Failed";
}

echo "Average: " . number_format($average, 2) . "<br>";
echo "Result: " . $result;

?>