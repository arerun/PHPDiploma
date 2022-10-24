<html> 
<head>
<title>Bags Details</title>
</head>
<body>
<center>
<fieldset>
<?php

 if (!empty($_POST['name'])) {
$name = $_POST['name'];
} else {
$name = NULL;
echo '<p><b>You forgot to enter your name!</b></p>';
}

 if (empty($_POST["date"])) {
 $date = "<b>Date is required</b>";
 }else {
 $date = ($_POST["date"]);
 }

 if (!empty($_POST['amount'])) {
$amount = $_POST['amount'];
} else {
$amount = NULL;
echo '<p><b>You forgot to enter your amount of bags</b></p>';
}

$bags = 5;
$total = $amount * $bags;

function calculate_discount($total,$totalD){
	return $total - $totalD;
};
 
if ($amount >= 25) {
	$discount = 5;
	$totalD = ($discount/100)*$total;
	
}if ($amount >= 50) {
	$discount = 10;
	$totalD = ($discount/100)*$total;
	
}if ($amount >= 100) {
	$discount = 15;
	$totalD = ($discount/100)*$total;
	
}if ($amount >= 150) {
	$discount = 20;
	$totalD = ($discount/100)*$total;
	
}if ($amount >= 200) {
	$discount = 25;
	$totalD = ($discount/100)*$total;
	
}if ($amount >= 300) {
	$discount = 30;
	$totalD = ($discount/100)*$total;
	
};
if ($name && $date && $amount && $total && $discount) {
echo "<h2> Below are your billing details: </h2>
<br / ><b>Name:</b> $name
<br / ><b>Date:</b> $date
<br / ><b>Amount of coffee bags:</b> $amount
<br / ><b>Price:</b> RM$total
<br / ><b>Discount:</b> $discount %
<br / ><b>Total Price:</b> RM $totalD";
} else {// One form element was not filled out properly.
echo '<p><font color="red">Please go back and fill out the form again.</font></p>';
}

?>
</fieldset>
</center>
</body>
</html>