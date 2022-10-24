<?php # Script 10.3 - edit_user.php

 

$page_title = 'Update Your order';
include ('includes/header.html');
echo '<h1>Edit an order</h1>';

 

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

 

if (isset($_POST['submit'])) {

 

    $errors = array();
    
    if (empty($_POST['f_name'])) {
        $errors[] = 'You forgot to enter your first name.';
    } else {
        $fn = $_POST['f_name'];
    }
    
    if (empty($_POST['l_name'])) {
        $errors[] = 'You forgot to enter your last name.';
    } else { 
        $ln = $_POST['l_name'];
    }
    
    if (empty($_POST['email'])) {
        $errors[] = 'You forgot to enter your email address.';
    } else {
        $e = $_POST['email'];
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
    
    if (empty($errors)) {
    
        $q = "SELECT order_id FROM flowerorder WHERE email='$e' AND order_id !=$id";
        $r = @mysqli_query($dbc,$q);
        if (mysqli_num_rows($r) == 0) {
        
        $q = "UPDATE flowerorder SET f_name='$fn', l_name='$ln', email='$e', deliver_date='$dd', arr_flower='$af', flower_type='$ft' WHERE order_id=$id LIMIT 1";
        $r = @mysqli_query ($dbc, $q);
        if (mysqli_affected_rows($dbc) == 1) {
        
            echo '<br>
			<p>The order has been updated.</p>
			<br>';
        
        } else { 
            echo '<p class="error">The order could not be updated due to a system error. We apologize for any inconvenience.</p>';
        }    
        
        } else {
            echo '<p class="error">The email address has already been registered.</p>';
        }
        
        }else {
            echo '<p class="error">The following error(s) occurred:<br />';
            foreach ($errors as $msg) {
                echo " - $msg<br />\n";
        }
        echo '</p><p>Please try again.</p>';
        
        }
        
        
    }
    
    $q = "SELECT f_name, l_name, email, deliver_date, arr_flower, flower_type FROM flowerorder WHERE  order_id=$id";
    $r = @mysqli_query ($dbc, $q);
    
    if (mysqli_num_rows($r) == 1) {

 

        $row = mysqli_fetch_array ($r, MYSQLI_NUM);
        
    echo '<form action="edit_order.php" method="post">
<p>First Name: <input type="text" name="f_name" size="15" maxlength="15" value="' .$row[0] . '" /><p>
<p>Last Name: <input type="text" name="l_name" size="15" maxlength="30" value="' .$row[1] . '" /><p>
<p>Email:<input type="text" name="email" size="20" maxlength="60" value="' .$row[2] . '" /></p>
<p>Date:<input type="text" name="deliver_date" size="20" maxlength="60" value="' .$row[3] . '" /></p>
<p>Arrangement of flower:
	    <select name="arr_flower" value="' .$row[4] .'">
        <option value="0">Please Select</option>
        <br><option value="vase">Vase</option>
        <br><option value="bouquet">Bouquet</option>
		<br><option value="box">Box</option>
		<br><option value="basket">Basket</option>
		</select>
</p>
<p>Type of flower:<value="' .$row[5] . '"
      <br>
  	  <br><input type = "radio" name = "flower_type" value = "rose">Rose
      <br><input type = "radio" name = "flower_type" value = "tulips">Tulips
      <br><input type = "radio" name = "flower_type" value = "carnation">Carnation
      <br><input type = "radio" name = "flower_type" value = "daisies">Daisies
      <br><input type = "radio" name = "flower_type" value = "lily">Lily</p>
<p><input type="submit" name="submit" value="Submit" /></p>
<input type="hidden" name="id" value="' . $id . '" />
</form>';

 

} else {
    echo '<p class="error">This page has been accessed in error.</p>';
}

 

mysqli_close($dbc);

 

include ('includes/footer.html');
?>

 