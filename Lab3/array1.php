<html>
<head>
<title>Simple Array Loop - Pets</title>
</head>
<body>
<h2>List of pets<br /></h2>
<?php
//Create array.
$pets=array(
 'cam' => 'cameleon',
 'gf' => 'goldfish',
 'rab' => 'rabbit'
 );

//Print keys and values of array to browser.
foreach($pets as $key => $value){
 echo "$key-$value ";
}
?>
</body>
</html>