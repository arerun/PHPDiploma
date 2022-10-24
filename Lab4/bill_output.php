<html> 
<head>
<title>Discount Bills</title>
</head>
<body>
<?php
$amount= $_POST['amount'];
$bags = 5;
$total = $amount * $bags;

function discount($total,$totalD){
	return $total - $totalD;
};
 
if ($amount >= 25) {
	$dis = 5;
	$totalD = ($dis/100)*$total;
	
}if ($amount >= 50) {
	$dis = 10;
	$totalD = ($dis/100)*$total;
	
}if ($amount >= 100) {
	$dis = 15;
	$totalD = ($dis/100)*$total;
	
}if ($amount >= 150) {
	$dis = 20;
	$totalD = ($dis/100)*$total;
	
}if ($amount >= 200) {
	$dis = 25;
	$totalD = ($dis/100)*$total;
	
}if ($amount >= 300) {
	$dis = 30;
	$totalD = ($dis/100)*$total;
	
};

echo "<h2> Below are your billing details: </h2>
<br / ><b>Amount of coffee bags:</b> $amount
<br / ><b>Price:</b> RM$total
<br / ><b>Discount:</b> $dis %
<br / ><b>Total Price:</b> RM";
echo discount($total,$totalD);

?>
</body>
</html>