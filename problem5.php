<?php

$kwh = 250;

if ($kwh <= 100) {
	$bill = $kwh * 10;
} elseif ($kwh <= 200) {
	$bill = (100 * 10) + (($kwh - 100) * 12);
} else {
	$bill = (100 * 10) + (100 * 12) + (($kwh - 200) * 15);
}

echo "Total electricity bill: ₱" . $bill;

?>