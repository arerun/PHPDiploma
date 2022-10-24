<html>
<head>
<title>Simple Array Loop - Colours</title>
</head>
<body>
<h2>List of colours<br /></h2>
<?php
//Create array.
$colours=array(
 'violet',
 'blue',
 'green',
 'yellow',
 'orange',
 'red'
 );
//Print values of array to browser.
foreach ($colours as $value){
 echo $value;
}
echo "</br>";
//Print values of array to browser, separated by commas.
foreach($colours as $value){
 echo "$value, ";
}
?>
</body>
</html>