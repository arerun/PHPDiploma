<html>
<head>
<title>Simple Array Loop - Colours</title>
</head>
<body>
<h2>List of colours<br /></h2>
<?php
//Create array.
$colours=array(
 'Tokyo',
 'New York City',
 'Mumbai',
 'Seoul',
 'Shanghai',
 'Buenos Aires',
 'Cairo',
 'London',
 );

//Print values of array to browser, separated by commas.
foreach($colours as $value){
 echo "$value, ";
}
?>
</body>
</html>