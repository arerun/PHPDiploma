<?php # Script 10.3 - delete_user.php

 

$page_title = 'Delete a Order';
include ('includes/header.html');
echo '<h1>Delete a Order</h1>';

 

if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) {
    $id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { 
  $id = $_POST['id'];
} else { 
    echo '<p class = "error">This page has been accessed in error.</p>';
    include ('includes/footer.html');
    exit();
}

 

require ('mysql_connect.php');

 

if (isset($_GET['submit'])) {

 

    $errors = array();
    
    if (empty($_GET['f_name'])) {
        $errors[] = 'You forgot to enter your first name.';
    } else {
        $fn = $_GET['f_name'];
    }
    
    if (empty($_GET['l_name'])) {
        $errors[] = 'You forgot to enter your last name.';
    } else { 
        $ln = $_GET['l_name'];
    }
    
    if (empty($_GET['email'])) {
        $errors[] = 'You forgot to enter your email address.';
    } else {
        $e = $_GET['email'];
    }
	
		// Check for date
	if (empty($_GET['deliver_date'])) {
		$errors[] = 'You forgot to enter your deliver date.';
	} else {
		$dd = $_GET ['deliver_date'];
	}
	
	// Check for a arrangement of flower.
	if (empty($_GET['arr_flower'])) {
		$errors[] = 'You forgot to enter your arrangement of flower.';
	} else {
		$af = $_GET ['arr_flower'];
	}
	
	// Check for a flower type
	if (empty($_GET['flower_type'])) {
		$errors[] = 'You forgot to enter your flower type.';
	} else {
		$ft = $_GET ['flower_type'];
	}
    
    if (empty($errors)) {
    
        $q = "SELECT order_id FROM flowerorder WHERE email='$e' AND order_id !=$id";
        $r = @mysqli_query($dbc,$q);
        if (mysqli_num_rows($r) == 0) {
        
        $q = "DELETE FROM flowerorder WHERE order_id='$id' ";
        if (mysqli_query($dbc, $q)) {
        
            echo '<p>The order has been deleted.</p>';
        
        } 
        
        }
        
        
    }
}
    
    $q = "SELECT f_name, l_name, email, arr_flower, flower_type, deliver_date FROM flowerorder WHERE  order_id=$id";
    $r = @mysqli_query ($dbc, $q);
    
    if (mysqli_num_rows($r) == 1) {

 

        $row = mysqli_fetch_array ($r, MYSQLI_NUM);
        
    echo '<form action="delete_order.php" method="get">
<p>First Name: <input type="text" name="f_name" size="15" maxlength="15" value="' .$row[0] . '" /><p>
<p>Last Name: <input type="text" name="l_name" size="15" maxlength="30" value="' .$row[1] . '" /><p>
<p>Email:<input type="text" name="email" size="20" maxlength="60" value="' .$row[2] . '" /></p>
<p>Date:<input type="text" name="deliver_date" size="20" maxlength="60" value="' .$row[3] . '" /></p>
<p>Arrangement of Flower:<input type="text" name="arr_flower" size="20" maxlength="60" value="' .$row[4] . '" /></p>
<p>Flower Type:<input type="text" name="flower_type" size="20" maxlength="60" value="' .$row[5] . '" /></p>


<p><input type="submit" name="submit" value="Delete" /></p>
<input type="hidden" name="id" value="' . $id . '" />
</form>';

 

} 

 

mysqli_close($dbc);

 

include ('includes/footer.html');
?>

 