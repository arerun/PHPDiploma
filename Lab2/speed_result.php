<html>
<head>
<title>Speed Result</title>
</head>
<body>
<?php
// If everything is okay, print the message.
if (!empty($_POST['speed'])) {
$speed = $_POST['speed'];
$kph = 1.609; 
// Calculate the total.
$total = $speed *$kph ;
$total = number_format($total, 2);
// Print the results.
echo 'Your speed is <b>' . $speed . 'MPH and change to KPH is <b>' . $total . '</b>.';
} else { // One form element was not filled out properly.
echo '<p><font color="red">Please go back and fill out the form again.</font></p>';
}
?>
</body>
</html>