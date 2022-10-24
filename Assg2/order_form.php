<html>
 <head>
 <style>
 .error {color: #FF0000;}
 </style>
 </head>

 <body>

 <?php
  $page_title = 'Ordering Form';
 // define variables and set to empty values
 $fnameErr = $lnameErr = $dateErr = $emailErr = $arrangementErr = $typeErr = "";
 $fname = $lname = $date = $email = $arrangement = $type = "";

 if (isset($_POST['submit'])) {
	 
 if (empty($_POST["fname"])) {
 $fnameErr = "First Name is required";
 }else {
 $fname = valid_input($_POST["fname"]);
 }
 
 if (empty($_POST["lname"])) {
 $lnameErr = "Last Name is required";
 }else {
 $lname = valid_input($_POST["lname"]);
 }

 if (empty($_POST["date"])) {
 $dateErr = "Date is required";
 }else {
 $date = valid_input($_POST["date"]);
 }

 if (empty($_POST["email"])) {
 $emailErr = "Email is required";
 }else {
 $email = valid_input($_POST["email"]);

 // check if e-mail address is well-formed
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $emailErr = "Invalid email format";
 }
 }

 if (empty($_POST["arrangement"])) {
 $arrangementErr = "Arrangement is required";
 }else {
 $arrangement = valid_input($_POST["arrangement"]);
 }


 if (empty($_POST["type"])) {
 $typeErr = "Type of flower is required";
 }else {
 $type = valid_input($_POST["type"]);
 }
 }

 function valid_input($data_input) {
 $data_input = trim($data_input);
 $data_input = stripslashes($data_input);
 $data_input = htmlspecialchars($data_input);
 return $data_input;
 }
 ?>
 
 <h2>Flower Ordering Form</h2>

 <form action="order_form.php" method="post">
 <table>
 <tr>
 <td>First Name:</td>
 <td><input type = "text" name = "fname" value= "<?php if (isset($_POST['fname'])) echo
$_POST['fname']; ?>" />
 <span class = "error">* <?php echo $fnameErr;?></span>
 </td>
 </tr>

 <tr>
 <td>Last Name:</td>
 <td><input type = "text" name = "lname" value= "<?php if (isset($_POST['lname'])) echo
$_POST['lname']; ?>" />
 <span class = "error">* <?php echo $lnameErr;?></span>
 </td>
 </tr>

 <tr>
 <td>E-mail: </td>
 <td><input type = "text" name = "email" value= "<?php if (isset($_POST['email'])) echo
$_POST['email']; ?>" />
 <span class = "error">* <?php echo $emailErr;?></span>
 </td>
 </tr>

 <tr>
 <td>Date: </td>
 <td><label for="date"></label> <input type="date" id="date" name="date">
 <span class = "error">* <?php echo $dateErr;?></span>
 </td>
 </tr>

 <tr>
 <td>Type of Flower:</td>
 <td>
  <input type = "radio" name = "gender" value = "rose">Rose
  <input type = "radio" name = "gender" value = "tulips">Tulips
  <input type = "radio" name = "gender" value = "carnation">Carnation
  <input type = "radio" name = "gender" value = "daisies">Daisies
  <input type = "radio" name = "gender" value = "lily">Lily
 <span class = "error">* <?php echo $typeErr;?></span>
 </td>
 </tr>

 <tr>
 <td>Arrangement:</td>
 <td>
        <select name="arrangement">
        <option value="0">Please Select</option>
        <option value="vase">Vase</option>
        <option value="bouquet">Bouquet</option>
		<option value="box">Box</option>
		<option value="basket">Basket</option>
		</select>
<span class = "error">* <?php echo $arrangementErr;?></span>
 </td>
 </tr>

 <tr>
 <td>
 <input type = "submit" name = "submit" value = "Submit">
 </td>
 </tr>

 </table>
 </form>


 </body>
</html>