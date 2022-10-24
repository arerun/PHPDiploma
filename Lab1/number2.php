<html>
<head>
<title>Numbers</title>
</head>
<body>
<?php
// Set the variables.
$x = 30; 
$y = 119.95;
$z = 10;
// Calculate the total.
$total = $x + $y + $z;
$total = number_format ($total, 2);
// Print the results.
echo '<br> Integer 1 is <b>'. $x . '</b>';
echo '<br> Integer 1 is <b>'. $y . '</b>';
echo '<br> Integer 1 is <b>'. $z . '</b>';
echo '<br>Total integer is <b>' . $total . '';
?>
</body>
</html>