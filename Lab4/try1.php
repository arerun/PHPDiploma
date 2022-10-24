<html>
<head>
<title>Form Feedback</title>
</head>
<body>
<fieldset><b><p>Thank you for your registration.</b></p>
Below are your registered details:<br><br>
 <?php
 if (!empty($_POST['name'])) {
$name = $_POST['name'];
} else {
$name = NULL;
echo '<p><b>You forgot to enter your name!</b></p>';
}

 if (!empty($_POST['address'])) {
$address = $_POST['address'];
} else {
$address = NULL;
echo '<p><b>You forgot to enter your address!</b></p>';
}

 if (!empty($_POST['number'])) {
$number = $_POST['number'];
} else {
$number = NULL;
echo '<p><b>You forgot to enter your phone number!</b></p>';
}

 if (empty($_POST["date"])) {
 $date = "<b>Date is required</b>";
 }else {
 $date = valid_input($_POST["date"]);
 }

if(isset($_POST['submit'])){
if(!empty($_POST['fillings'])){
foreach($_POST['fillings'] as $checked){
echo ('<b> Fillings: </b>');
echo $checked . '<br>';
}
} else {
echo '<div class="error">Checkbox is not selected!</div>';
}
}	

if(!empty($_POST['flavor'])) {
  $flavor = $_POST['flavor'];
}
else {
  echo "<b>You forgot to enter your flavor</b>";
}


 if (empty($_POST["size"])) {
 $size = "<b>Size is required</b>";
 }else {
 $size = valid_input($_POST["size"]);
 }
if ($flavor && $size && $name && $address && $number && $date) {
// Print the submitted information.
echo "<b>Name:</b>$name
<br /><b>Address:</b>$address
<br /><b>Phone Number:</b>$number
<br /><b>Date:</b>$date
<br /><b>Flavor:</b>$flavor
<br /><b>Size:</b>$size
</fieldset>";
} else {// One form element was not filled out properly.
echo '<p><font color="red">Please go back and fill out the form again.</font></p>';
}
 function valid_input($data_input) {
 $data_input = trim($data_input);
 $data_input = stripslashes($data_input);
 $data_input = htmlspecialchars($data_input);
 return $data_input;
 }
 ?>
 </body>
</html>