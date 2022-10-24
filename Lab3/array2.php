<html>
<head>
<title>Simple Array Loop - Pets</title>
</head>
<body>
<h2>List of States<br /></h2>
<?php
//Create array.
$states=array(
 'MD' => 'Maryland',
 'PA' => 'Pennsylvania',
 'IL' => 'Illinois',
 'MO' => 'Missouri',
 );

//Print keys and values of array to browser.
foreach($states as $key => $value){
 echo "<br>$key  -  $value ";
}
?>
</body>
</html>