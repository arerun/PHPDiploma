<?php # Script 7.6 - view_users.php (2nd version after Script 7.4)
// This script retrieves all the records from the users table.

$page_title = 'View the Current Orders';
include ('./includes/header.html');

// Page header.
echo '<h1 id="mainhead">Registered Users</h1>';

require_once ('mysql_connect.php'); // Connect to the db.

// Make the query.
$query = "SELECT CONCAT(l_name, ', ', f_name) AS name, deliver_date, email, arr_flower, flower_type, order_id FROM flowerorder
ORDER BY f_name ASC";
$result = mysqli_query($dbc, $query); // Run the query.
$num = mysqli_num_rows($result);

if ($num > 0) { // If it ran OK, display the records.
   
    echo "<p>There are currently $num registered users.</p>\n";
   
    // Table header.
    echo '<table align="center" cellspacing="0" cellpadding="5">
    <tr>
    <td align="left"><b>Update</b></td>
    <td align="left"><b>Delete</b></td>
    <td align="left"><b>Name</b></td>
	<td align="left"><b>Email</b></td>
	<td align="left"><b>Flower Arrangement</b></td>
	<td align="left"><b>Flower Type</b></td>
	<td align="left"><b>Deliver Date</b></td>
    </tr>
    ';
   
    // Fetch and print all the records.
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
        <td align="left"><a href="edit_order.php?id=' . $row['order_id'] . '">Edit</a></td>
        <td align="left"><a href="delete_order.php?id=' . $row['order_id'] . '">Delete</a></td>
        <td align="left">'. $row['name'] . '</td>
		<td align="left">'. $row['email'] . '</td>
		<td align="left">'. $row['arr_flower'] . '</td>
		<td align="left">'. $row['flower_type'] . '</td>
		<td align="left">'. $row['deliver_date'] . '</td>
        </tr>
        ';
    }
   
    echo '</table>';
   
    mysqli_free_result ($result); // Free up the resources.
   
} else { // If it did not run OK.
    echo '<p class="error">There are currently no registered orders.</p>';
}

mysqli_close($dbc); // Close the database connection.

include ('./includes/footer.html');
?>