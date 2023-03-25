<?php
// get the number of units consumed from the user
$units = 250;

// calculate the electricity bill based on the number of units consumed
if($units <= 50) {
  $bill = 3.50;
} elseif($units > 50 && $units <= 100) {
  $bill = 4.00;
} elseif($units > 100 && $units <= 200) {
  $bill = 5.20;
} else {
  $bill = 4.5;
}

// add additional surcharge if applicable
if($bill > 250) {
  $bill=6.50;
}

// print the final electricity bill
echo "Electricity Bill: Rs. ".$bill;
?>