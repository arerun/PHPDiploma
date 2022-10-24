<html>
<head>
<title>Form Feedback</title>
</head>
<body>
<?php
// Create a shorthand for the form data.
$f = $_POST['fname'];
$l = $_POST['lname'];
$p = $_POST['phone'];
$e = $_POST['email'];
// Print the submitted information.
echo "<p>Thank you for your registration.<br /></p>
Below are your registered details:
<br /><b>First Name:</b>$f
<br /><b>Last Name:</b>$l
<br /><b>Phone No:</b>$p
<br /><b>Email:</b>$e";
?>
</body>
</html>