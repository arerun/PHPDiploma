<?php # Script 10.3 - delete_user.php

 

$page_title = 'Delete a User';
include ('includes/header.html');
echo '<h1>Delete a User</h1>';

 

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
    
    if (empty($_GET['first_name'])) {
        $errors[] = 'You forgot to enter your first name.';
    } else {
        $fn = $_GET['first_name'];
    }
    
    if (empty($_GET['last_name'])) {
        $errors[] = 'You forgot to enter your last name.';
    } else { 
        $ln = $_GET['last_name'];
    }
    
    if (empty($_GET['email'])) {
        $errors[] = 'You forgot to enter your email address.';
    } else {
        $e = $_GET['email'];
    }
    
    if (empty($errors)) {
    
        $q = "SELECT user_id FROM users WHERE email='$e' AND user_id !=$id";
        $r = @mysqli_query($dbc,$q);
        if (mysqli_num_rows($r) == 0) {
        
        $q = "DELETE FROM users WHERE user_id='$id' ";
        if (mysqli_query($dbc, $q)) {
        
            echo '<p>The users has been deleted.</p>';
        
        } 
        
        }
        
        
    }
}
    
    $q = "SELECT first_name, last_name, email FROM users WHERE  user_id=$id";
    $r = @mysqli_query ($dbc, $q);
    
    if (mysqli_num_rows($r) == 1) {

 

        $row = mysqli_fetch_array ($r, MYSQLI_NUM);
        
    echo '<form action="delete_user.php" method="get">
<p>First Name: <input type="text" name="first_name" size="15" maxlength="15" value="' .$row[0] . '" /><p>
<p>Last Name: <input type="text" name="last_name" size="15" maxlength="30" value="' .$row[1] . '" /><p>
<p>Email:<input type="text" name="email" size="20" maxlength="60" value="' .$row[2] . '" /></p>
<p><input type="submit" name="submit" value="Delete" /></p>
<input type="hidden" name="id" value="' . $id . '" />
</form>';

 

} 

 

mysqli_close($dbc);

 

include ('includes/footer.html');
?>

 