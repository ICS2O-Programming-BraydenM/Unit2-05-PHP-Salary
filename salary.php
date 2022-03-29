<?php
// the amount of tax that will be taken from our pay
define(TAX_RATE, 0.1805);

// get the hours and rate from the textfield
	$hours = $_POST['hours'];
	$rate = $_POST['rate'];
  
// calculate the amount earned 
	$total_amount_earned = $hours * $rate;

// calculate the tax
$tax = number_format($total_amount_earned * TAX_RATE, 2);

// amount received after tax
$final_amount = $total_amount_earned - $tax;
?>
<h3>Results:</h3>
The total amount you earned is $<?php echo "$final_amount" ?>.
The total amount of tax is $<?php echo "$tax" ?>.