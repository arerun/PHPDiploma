<html>
<br><br>
<head>
	<style>
	fieldset {
		width: 650px;
		opacity: 0.9;
		background-color:white;
		}
	table,th, td {
		border: 1px solid grey;
		text-align: center;
		font-size: 10;
	}
	</style>
</head>
<center>
<fieldset>

<?php # Script 7.6 - view_users.php (2nd version after Script 7.4)
// This script retrieves all the records from the users table.
$page_title = 'View the Current Orders';

echo '<br><br>';
echo '<image src ="/assign2/flora.png" width = "150" height = "150"/>';

include ('./includes/header.html');

// Page header.
echo '<h1 id="mainhead">Registered Users</h1>';
echo '<image src ="/assign2/girl1.png" width = "190" height = "190"/>';
echo '<br><br>';
require_once ('mysql_connect.php'); // Connect to the db.

// Make the query.
$query = "SELECT CONCAT(l_name, ', ', f_name) AS name, deliver_date, email, arr_flower, flower_type, order_id FROM flowerorder
ORDER BY f_name ASC";
$result = mysqli_query($dbc, $query); // Run the query.
$num = mysqli_num_rows($result);

if ($num > 0) { // If it ran OK, display the records.
   
    echo "<br><p>There are currently $num registered users.</p>\n<br><br>";
   
    // Table header.
    echo '<table align="center" cellspacing="0" cellpadding="5">
	
    <tr>
    <td align="center"><b>Update</b></td>
    <td align="center"><b>Delete</b></td>
    <td align="center"><b>Name</b></td>
	<td align="center"><b>Email</b></td>
	<td align="center"><b>Flower Arrangement</b></td>
	<td align="center"><b>Flower Type</b></td>
	<td align="center"><b>Deliver Date</b></td>
    </tr>
    ';
   
    // Fetch and print all the records.
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
        <td align="center"><a href="edit_order.php?id=' . $row['order_id'] . '">Edit</a></td>
        <td align="center"><a href="delete_order.php?id=' . $row['order_id'] . '">Delete</a></td>
        <td align="center">'. $row['name'] . '</td>
		<td align="center">'. $row['email'] . '</td>
		<td align="center">'. $row['arr_flower'] . '</td>
		<td align="centert">'. $row['flower_type'] . '</td>
		<td align="center">'. $row['deliver_date'] . '</td>
        </tr>
        ';
    }
   
    echo '</table>';
   
    mysqli_free_result ($result); // Free up the resources.
   
} else { // If it did not run OK.
    echo '<p class="error">There are currently no registered orders.</p>';
}

mysqli_close($dbc); // Close the database connection.

echo '<br><br><br><br><br>';
echo '<image src ="/assign2/daisies.jpg" width = "80" height = "80"/>';
echo '<image src ="/assign2/daisies.jpg" width = "80" height = "80"/>';
echo '<image src ="/assign2/daisies.jpg" width = "80" height = "80"/>';
echo '<image src ="/assign2/daisies.jpg" width = "80" height = "80"/>';
echo '<image src ="/assign2/daisies.jpg" width = "80" height = "80"/>';

include ('./includes/footer.html');
?>
</center>
<br><br>
</html>