<html>
<head>
<title>Form Feedback</title>
</head>
<body>
<?php

// Validate name
if (!empty($_POST['name'])) {
$name = $_POST['name'];
} else {
$name = NULL;
echo '<p><b>You forgot to enter your name!</b></p>';
}
// Validate phone number
if (!empty($_POST['phone'])) {
$phone = $_POST['phone'];
} else {
$phone = NULL;
echo '<p><b>You forgot to enter your phone number!</b></p>';
}
// Validate Email
if (!empty($_POST['email'])) {
$email = $_POST['email'];
} else {
$email = NULL;
echo '<p><b>You forgot to enter your email!</b></p>';
}

if(!empty($_POST['program'])) {
  $program = $_POST['program'];
}
else {
  echo "You forgot to enter your programme";
}

// If everything is okay, print the message.
if ($name && $phone && $email && $program ) {
// Print the submitted information.
echo "<p>Thank you for your registration.<br /></p>
Below are your registered details:
<br /><b>Name:</b>$name
<br /><b>Phone No:</b>$phone
<br /><b>Address:</b>$email
<br /><b>Programme:</b>$program";

} else {// One form element was not filled out properly.
echo '<p><font color="red">Please go back and fill out the form again.</font></p>';
}
?>
</body>
</html>