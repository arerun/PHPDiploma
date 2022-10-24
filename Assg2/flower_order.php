<?php # Script 7.7 - register.php (3rd version after Scripts 7.3 & 7.5)

$page_title = 'Flower Order' ;
include ('./includes/header.html');

// Check if the form has been submitted.
if (isset($_POST['submitted'])) {
	
	require_once ('mysql_connect.php'); //Connect to db
	
$errors = array(); //initialize error array.

	// Check for a first name.
	if (empty($_POST['f_name'])) {
		$errors[] = 'You forgot to enter your first name.';
	} else {
		$fn = $_POST ['f_name'];
	}
	
	// Check for a last name.
	if (empty($_POST['l_name'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$ln = $_POST ['l_name'];
	}
	
	// Check for a email address.
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = $_POST ['email'];
	}
	
	// Check for date
	if (empty($_POST['deliver_date'])) {
		$errors[] = 'You forgot to enter your deliver date.';
	} else {
		$dd = $_POST ['deliver_date'];
	}
	
	// Check for a arrangement of flower.
	if (empty($_POST['arr_flower'])) {
		$errors[] = 'You forgot to enter your arrangement of flower.';
	} else {
		$af = $_POST ['arr_flower'];
	}
	
	// Check for a flower type
	if (empty($_POST['flower_type'])) {
		$errors[] = 'You forgot to enter your flower type.';
	} else {
		$ft = $_POST ['flower_type'];
	}

	if (empty($errors)) { // If everything's okay.
	
	// Register the user in the database.
	
	// Check for previous registration
	$query = "SELECT order_id FROM floweroder WHERE email = '$e'";
	$result = mysqli_query ($dbc, $query);
	if (mysqli_num_rows($result) == 0) {
	
	// Make the query.
	$query = "INSERT INTO flowerorder (f_name, l_name, email, arr_flower, flower_type, deliver_date) VALUES ('$fn', '$ln', '$e', '$af', '$ft', '$dd')";
	$result = mysqli_query ($dbc, $query)or trigger_error("Query: $query\n<br>MySQL Error: " . mysqli_error($dbc)); // Run the query.
	if (@mysqli_affected_rows($dbc)) { // If it ran OK.
	
		
		// Print a message.
		echo '<h1 id="mainhead"> Thank you! </h1>
	<p> You order has been placed . Please wait patiently </p><p><br /></p>';
	
		// Include the footer and quit the script (to not show the form).
		include ('./includes/footer.html');
		exit();
		
	   }

	} else { // Already registered.
		echo '<h1 id="mainhead"> Error! </h1>
		<p class = "error"> The email address has already been used for an order.</p>';
	   }
	   
	} else { // Report the errors.
		
		echo '<h1 id="mainhead">Error!</h1>
		<p class = "error"> The following error(s) occured:<br />';
		foreach ($errors as $msg) { // Print each other.
			echo " - $msg<br />\n";
	   }
		echo '</p><p>Please try again.</p><p><br /></p>';
		
	} // End of if (empty($errors)) IF.
	     
		mysqli_close($dbc); // Close the database connection.
	
	} //End of the main Submit conditional.
?>
	
<h2> Order your flower  </h2>
<form action = "flower_order.php" method = "post">
	<p> First Name: <input type="text" name="f_name" size="15" maxlength="20" value="<?php if (isset($_POST['f_name'])) echo $_POST['f_name'];?>" /></p>
	<p> Last Name: <input type="text" name="l_name" size="15" maxlength="20" value="<?php if (isset($_POST['l_name'])) echo $_POST['l_name'];?>" /></p>
	<p> Email Address: <input type="text" name="email" size="20" maxlength="40" value="<?php if (isset($_POST['email'])) echo $_POST['email'];?>" /></p>
    <p> Date:<label for="deliver_date"></label> <input type="date" id="date" name="deliver_date"></p>
	<p> Type of Flower: 
	  <br><input type = "radio" name = "flower_type" value = "Rose">Rose
      <br><input type = "radio" name = "flower_type" value = "Tulips">Tulips
      <br><input type = "radio" name = "flower_type" value = "Carnation">Carnation
      <br><input type = "radio" name = "flower_type" value = "Daisies">Daisies
      <br><input type = "radio" name = "flower_type" value = "Lily">Lily
	</p>
	<p> Flower arrangement:
	    <select name="arr_flower">
        <option value="0">Please Select</option>
        <br><option value="Vase">Vase</option>
        <br><option value="Bouquet">Bouquet</option>
		<br><option value="Box">Box</option>
		<br><option value="Basket">Basket</option>
		</select>
	</p>
	<p><input type="submit" name="submit" value="Order" /></p>       
	<input type="hidden" name="submitted" value="TRUE" />
</form>
<?php
include ('./includes/footer.html');
?>