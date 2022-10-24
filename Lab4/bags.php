<?php 

$bagPrice = 5;
$amount = 200;


if($amount >= 25) {
	
     $totaldis= (5 * $amount) * 0.05;
     $total = (5 * $amount) - $totaldis ; // $_POST['amount'] tambah ini nanti
	 $discount = "5 percent";

} else if($amount>50 AND $amount<=99 ) {

    $totaldis= (5 * $amount) * 0.1;
    $total = (5 * $amount) - 10/100 ;
	$discount = "10 percent";

} else if($amount>100 AND $amount<=149) {

    $totaldis= (5 * $amount) * 0.15;
    $total = (5 * $amount) - 15/100;
	$discount = "15 percent";

} else if($amount>150 AND $amount<=199) {

    $totaldis= (5 * $amount) * 0.2;
    $total = (5 * $amount) - 20/100;
	$discount = "20 percent";

} else if($amount>200 AND $amount<=299) {

    $totaldis= (5 * $amount) * 0.25;
    $total = (5 * $amount) - 25/100 ;
	$discount = "25 percent";

} else if($amount>300) {

    $totaldis= (5 * $amount) * 0.3;
    $total = (5 * $amount) - 30/100 ;
	$discount = "30 percent";

} 

echo "<h1>Final Price</h1>";
echo '<br>';
echo "Inital Bag Price: RM $bagPrice";
echo '<br>';
echo "Discount: $discount";
echo '<br>';
echo "Final Bag Price After Discount: RM $total";