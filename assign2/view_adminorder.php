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
		font-size: 10;
	}
	</style>
</head>
<center>
<fieldset>

<?php 
$page_title = 'Flower Order' ;

echo'<br><br>';
echo'<image src ="/assign2/flora.png" width = "150" height = "150"/>';

include ('./includes/header.html');

// Page header.
echo '<h1 id="mainhead">Current Order 2020</h1>';
echo '<br>';
echo '<image src ="/assign2/calender.jpg" width = "170" height = "170"/>';
echo '<br>';

require_once ('mysql_connect.php'); // Connect to the db.

// Make the query.
$query1 = "SELECT f_name, l_name, DATE_FORMAT(deliver_date,'%d %M, %Y') AS d1, MONTH(deliver_date), email, arr_flower, flower_type, order_id FROM flowerorder
WHERE MONTH(deliver_date)= 1 ";
$query2 = "SELECT f_name, l_name, DATE_FORMAT(deliver_date,'%d %M, %Y') AS d2, MONTH(deliver_date), email, arr_flower, flower_type, order_id FROM flowerorder
WHERE MONTH(deliver_date)= 2 ";
$query3 = "SELECT f_name, l_name, DATE_FORMAT(deliver_date,'%d %M, %Y') AS d3, MONTH(deliver_date), email, arr_flower, flower_type, order_id FROM flowerorder
WHERE MONTH(deliver_date)= 3 ";
$query4 = "SELECT f_name, l_name, DATE_FORMAT(deliver_date,'%d %M, %Y') AS d4, MONTH(deliver_date), email, arr_flower, flower_type, order_id FROM flowerorder
WHERE MONTH(deliver_date)= 4 ";
$query5 = "SELECT f_name, l_name, DATE_FORMAT(deliver_date,'%d %M, %Y') AS d5, MONTH(deliver_date), email, arr_flower, flower_type, order_id FROM flowerorder
WHERE MONTH(deliver_date)= 5 ";
$query6 = "SELECT f_name, l_name, DATE_FORMAT(deliver_date,'%d %M, %Y') AS d6, MONTH(deliver_date), email, arr_flower, flower_type, order_id FROM flowerorder
WHERE MONTH(deliver_date)= 6 ";
$query7 = "SELECT f_name, l_name, DATE_FORMAT(deliver_date,'%d %M, %Y') AS d7, MONTH(deliver_date), email, arr_flower, flower_type, order_id FROM flowerorder
WHERE MONTH(deliver_date)= 7 ";
$query8 = "SELECT f_name, l_name, DATE_FORMAT(deliver_date,'%d %M, %Y') AS d8, MONTH(deliver_date), email, arr_flower, flower_type, order_id FROM flowerorder
WHERE MONTH(deliver_date)= 8 ";
$query9 = "SELECT f_name, l_name, DATE_FORMAT(deliver_date,'%d %M, %Y') AS d9, MONTH(deliver_date), email, arr_flower, flower_type, order_id FROM flowerorder
WHERE MONTH(deliver_date)= 9 ";
$query10 = "SELECT f_name, l_name, DATE_FORMAT(deliver_date,'%d %M, %Y') AS d10, MONTH(deliver_date), email, arr_flower, flower_type, order_id FROM flowerorder
WHERE MONTH(deliver_date)= 10 ";
$query11 = "SELECT f_name, l_name, DATE_FORMAT(deliver_date,'%d %M, %Y') AS d11, MONTH(deliver_date), email, arr_flower, flower_type, order_id FROM flowerorder
WHERE MONTH(deliver_date)= 11 ";
$query12 = "SELECT f_name, l_name, DATE_FORMAT(deliver_date,'%d %M, %Y') AS d12, MONTH(deliver_date), email, arr_flower, flower_type, order_id FROM flowerorder
WHERE MONTH(deliver_date)= 12 ";



$result1 = mysqli_query($dbc, $query1);
$result2 = mysqli_query($dbc, $query2);
$result3 = mysqli_query($dbc, $query3);
$result4 = mysqli_query($dbc, $query4);
$result5 = mysqli_query($dbc, $query5);
$result6 = mysqli_query($dbc, $query6);
$result7 = mysqli_query($dbc, $query7);
$result8 = mysqli_query($dbc, $query8);
$result9 = mysqli_query($dbc, $query9);
$result10 = mysqli_query($dbc, $query10);
$result11 = mysqli_query($dbc, $query11);
$result12 = mysqli_query($dbc, $query12); // Run the query.

$num1 = mysqli_num_rows($result1);
$num2 = mysqli_num_rows($result2);
$num3 = mysqli_num_rows($result3);
$num4 = mysqli_num_rows($result4);
$num5 = mysqli_num_rows($result5);
$num6 = mysqli_num_rows($result6);
$num7 = mysqli_num_rows($result7);
$num8 = mysqli_num_rows($result8);
$num9 = mysqli_num_rows($result9);
$num10 = mysqli_num_rows($result10);
$num11 = mysqli_num_rows($result11);
$num12 = mysqli_num_rows($result12);

if ($num1 > 0) { // If it ran OK, display the records.
   
     
    // Table header.
    echo '<table align="center" cellspacing="0" cellpadding="5">
	<br>

	<center><h1>January</h1></center>

    <tr>
    <td align="center"><b>Order ID</b></td>
    <td align="center"><b>First Name</b></td>
	<td align="center"><b>Last Name</b></td>
	<td align="center"><b>Email</b></td>
	<td align="center"><b>Flower Arrangement</b></td>
	<td align="center"><b>Flower Type</b></td>
	<td align="center"><b>Deliver Month</b></td>
    </tr>
	
	
    ';
   
    // Fetch and print all the records.
    while ($row1 = mysqli_fetch_assoc($result1)) {
        echo '
		<tr>
        <td align="center">'. $row1['order_id'] . '</td>
        <td align="center">'. $row1['f_name'] . '</td>
		<td align="center">'. $row1['l_name'] . '</td>
		<td align="center">'. $row1['email'] . '</td>
		<td align="center">'. $row1['arr_flower'] . '</td>
		<td align="center">'. $row1['flower_type'] . '</td>
		<td align="center">'. $row1['d1'] . '</td>
        </tr>
        ';
    }	
   
     echo '</table>';
   
     mysqli_free_result ($result1); // Free up the resources.
	
	

} else { // If it did not run OK.
    echo '<hr>
	<p class="error">There are currently no registered orders in January.</p>';
}

if ($num2 > 0) { // If it ran OK, display the records.
   
     
    // Table header.
    echo '<table align="center" cellspacing="0" cellpadding="5">
	<hr>
	<center><h1>February</h1></center>
    <tr>
    <td align="center"><b>Order ID</b></td>	
    <td align="center"><b>First Name</b></td>
	<td align="center"><b>Last Name</b></td>
	<td align="center"><b>Email</b></td>
	<td align="center"><b>Flower Arrangement</b></td>
	<td align="center"><b>Flower Type</b></td>
	<td align="center"><b>Deliver Month</b></td>
    </tr>
	
	
    ';
   
    // Fetch and print all the records.
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo '
		<tr>
        <td align="center">'. $row2['order_id'] . '</td>
        <td align="center">'. $row2['f_name'] . '</td>
		<td align="center">'. $row2['l_name'] . '</td>
		<td align="center">'. $row2['email'] . '</td>
		<td align="center">'. $row2['arr_flower'] . '</td>
		<td align="center">'. $row2['flower_type'] . '</td>
		<td align="center">'. $row2['d2'] . '</td>
        </tr>
        ';
    }	
   
     echo '</table>';
   
     mysqli_free_result ($result2); // Free up the resources.
	
	

} else { // If it did not run OK.
    echo '<hr>
	<p class="error">There are currently no registered orders in February.</p>';
}

if ($num3 > 0) { // If it ran OK, display the records.
   
     
    // Table header.
    echo '<table align="center" cellspacing="0" cellpadding="5">
	<hr>
	<center><h1>March</h1></center>
    <tr>
    <td align="center"><b>Order ID</b></td>	
    <td align="center"><b>First Name</b></td>
	<td align="center"><b>Last Name</b></td>
	<td align="center"><b>Email</b></td>
	<td align="center"><b>Flower Arrangement</b></td>
	<td align="center"><b>Flower Type</b></td>
	<td align="center"><b>Deliver Month</b></td>
    </tr>
	
	
    ';
   
    // Fetch and print all the records.
    while ($row3 = mysqli_fetch_assoc($result3)) {
        echo ' 
		<tr>
        <td align="center">'. $row3['order_id'] . '</td>
        <td align="center">'. $row3['f_name'] . '</td>
		<td align="center">'. $row3['l_name'] . '</td>
		<td align="center">'. $row3['email'] . '</td>
		<td align="center">'. $row3['arr_flower'] . '</td>
		<td align="center">'. $row3['flower_type'] . '</td>
		<td align="center">'. $row3['d3'] . '</td>
        </tr>
        ';
    }	
   
     echo '</table>';
   
     mysqli_free_result ($result3); // Free up the resources.
	
	

} else { // If it did not run OK.
    echo '<hr>
	<p class="error">There are currently no registered orders in March.</p>';
}

if ($num4 > 0) { // If it ran OK, display the records.
   
     
    // Table header.
    echo '<table align="center" cellspacing="0" cellpadding="5">
	 <hr>
	<center><h1>April</h1></center>
    <tr>
    <td align="center"><b>Order ID</b></td>
    <td align="center"><b>First Name</b></td>
	<td align="center"><b>Last Name</b></td>
	<td align="center"><b>Email</b></td>
	<td align="center"><b>Flower Arrangement</b></td>
	<td align="center"><b>Flower Type</b></td>
	<td align="center"><b>Deliver Month</b></td>
    </tr>
	
	
    ';
   
    // Fetch and print all the records.
    while ($row4 = mysqli_fetch_assoc($result4)) {
        echo ' 
		<tr>
        <td align="center">'. $row4['order_id'] . '</td>
        <td align="center">'. $row4['f_name'] . '</td>
		<td align="center">'. $row4['l_name'] . '</td>
		<td align="center">'. $row4['email'] . '</td>
		<td align="center">'. $row4['arr_flower'] . '</td>
		<td align="center">'. $row4['flower_type'] . '</td>
		<td align="center">'. $row4['d4'] . '</td>
        </tr>
        ';
    }	
   
     echo '</table>';
   
     mysqli_free_result ($result4); // Free up the resources.
	
	

} else { // If it did not run OK.
    echo '<br><hr>
	<p class="error">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp There are currently no registered orders April.</p>';
}

if ($num5 > 0) { // If it ran OK, display the records.
   
     
    // Table header.
    echo '<table align="center" cellspacing="0" cellpadding="5">
	<hr>
	<center><h1>May</h1></center>
    <tr>
    <td align="center"><b>Order ID</b></td>	
    <td align="center"><b>First Name</b></td>
	<td align="center"><b>Last Name</b></td>
	<td align="center"><b>Email</b></td>
	<td align="center"><b>Flower Arrangement</b></td>
	<td align="center"><b>Flower Type</b></td>
	<td align="center"><b>Deliver Month</b></td>
    </tr>
	
	
    ';
   
    // Fetch and print all the records.
    while ($row5 = mysqli_fetch_assoc($result5)) {
        echo ' 
		<tr>
        <td align="center">'. $row5['order_id'] . '</td>
        <td align="center">'. $row5['f_name'] . '</td>
		<td align="center">'. $row5['l_name'] . '</td>
		<td align="center">'. $row5['email'] . '</td>
		<td align="center">'. $row5['arr_flower'] . '</td>
		<td align="center">'. $row5['flower_type'] . '</td>
		<td align="center">'. $row5['d5'] . '</td>
        </tr>
        ';
    }	
   
     echo '</table>';
   
     mysqli_free_result ($result5); // Free up the resources.
	
	

} else { // If it did not run OK.
    echo '<hr>
	<p class="error">There are currently no registered orders May.</p>';
}

if ($num6 > 0) { // If it ran OK, display the records.
   
     
    // Table header.
    echo '<table align="center" cellspacing="0" cellpadding="5">
	<hr>
	<center><h1>June</h1></center>
    <tr>
    <td align="center"><b>Order ID</b></td>
    <td align="center"><b>First Name</b></td>
	<td align="center"><b>Last Name</b></td>
	<td align="center"><b>Email</b></td>
	<td align="center"><b>Flower Arrangement</b></td>
	<td align="center"><b>Flower Type</b></td>
	<td align="center"><b>Deliver Month</b></td>
    </tr>
	
	
    ';
   
    // Fetch and print all the records.
    while ($row6 = mysqli_fetch_assoc($result6)) {
        echo ' 
		<tr>
        <td align="center">'. $row6['order_id'] . '</td>
        <td align="center">'. $row6['f_name'] . '</td>
		<td align="center">'. $row6['l_name'] . '</td>
		<td align="center">'. $row6['email'] . '</td>
		<td align="center">'. $row6['arr_flower'] . '</td>
		<td align="center">'. $row6['flower_type'] . '</td>
		<td align="center">'. $row6['d6'] . '</td>
        </tr>
        ';
    }	
   
     echo '</table>';
   
     mysqli_free_result ($result6); // Free up the resources.
	
	

} else { // If it did not run OK.
    echo '<hr>
	<p class="error">There are currently no registered orders June.</p>';
}

if ($num7 > 0) { // If it ran OK, display the records.
   
     
    // Table header.
    echo '<table align="center" cellspacing="0" cellpadding="5">
	<hr>
	<center><h1>July</h1></center>
    <tr>
    <td align="center"><b>Order ID</b></td>
    <td align="center"><b>First Name</b></td>
	<td align="center"><b>Last Name</b></td>
	<td align="center"><b>Email</b></td>
	<td align="center"><b>Flower Arrangement</b></td>
	<td align="center"><b>Flower Type</b></td>
	<td align="center"><b>Deliver Month</b></td>
    </tr>
	
	
    ';
   
    // Fetch and print all the records.
    while ($row7 = mysqli_fetch_assoc($result7)) {
        echo ' 
		<tr>
        <td align="center">'. $row7['order_id'] . '</td>
        <td align="center">'. $row7['f_name'] . '</td>
		<td align="center">'. $row7['l_name'] . '</td>
		<td align="center">'. $row7['email'] . '</td>
		<td align="center">'. $row7['arr_flower'] . '</td>
		<td align="center">'. $row7['flower_type'] . '</td>
		<td align="center">'. $row7['d7'] . '</td>
        </tr>
        ';
    }	
   
     echo '</table>';
   
     mysqli_free_result ($result7); // Free up the resources.
	
	

} else { // If it did not run OK.
    echo '<hr>
	<p class="error">There are currently no registered orders July.</p>';
}

if ($num8 > 0) { // If it ran OK, display the records.
   
     
    // Table header.
    echo '<table align="center" cellspacing="0" cellpadding="5">
	 <hr>
	<center><h1>August</h1></center>
    <tr>
    <td align="center"><b>Order ID</b></td>
    <td align="center"><b>First Name</b></td>
	<td align="center"><b>Last Name</b></td>
	<td align="center"><b>Email</b></td>
	<td align="center"><b>Flower Arrangement</b></td>
	<td align="center"><b>Flower Type</b></td>
	<td align="center"><b>Deliver Month</b></td>
    </tr>
	
	
    ';
   
    // Fetch and print all the records.
    while ($row8 = mysqli_fetch_assoc($result8)) {
        echo '
		<tr>
        <td align="center">'. $row8['order_id'] . '</td>
        <td align="center">'. $row8['f_name'] . '</td>
		<td align="center">'. $row8['l_name'] . '</td>
		<td align="center">'. $row8['email'] . '</td>
		<td align="center">'. $row8['arr_flower'] . '</td>
		<td align="center">'. $row8['flower_type'] . '</td>
		<td align="center">'. $row8['d8'] . '</td>
        </tr>
        ';
    }	
   
     echo '</table>';
   
     mysqli_free_result ($result8); // Free up the resources.
	
	

} else { // If it did not run OK.
    echo '<hr>
	<p class="error">There are currently no registered orders August.</p>';
}

if ($num9 > 0) { // If it ran OK, display the records.
   
     
    // Table header.
    echo '<table align="center" cellspacing="0" cellpadding="5">
	<hr>
		<center><h1>September</h1></center>
    <tr>
    <td align="center"><b>Order ID</b></td>
    <td align="center"><b>First Name</b></td>
	<td align="center"><b>Last Name</b></td>
	<td align="center"><b>Email</b></td>
	<td align="center"><b>Flower Arrangement</b></td>
	<td align="center"><b>Flower Type</b></td>
	<td align="center"><b>Deliver Month</b></td>
    </tr>
	
	
    ';
   
    // Fetch and print all the records.
    while ($row9 = mysqli_fetch_assoc($result9)) {
        echo ' 
		<tr>
        <td align="center">'. $row9['order_id'] . '</td>
        <td align="center">'. $row9['f_name'] . '</td>
		<td align="center">'. $row9['l_name'] . '</td>
		<td align="center">'. $row9['email'] . '</td>
		<td align="center">'. $row9['arr_flower'] . '</td>
		<td align="center">'. $row9['flower_type'] . '</td>
		<td align="center">'. $row9['d9'] . '</td>
        </tr>
        ';
    }	
   
     echo '</table>';
   
     mysqli_free_result ($result9); // Free up the resources.
	
	

} else { // If it did not run OK.
    echo '<hr>
	<p class="error">There are currently no registered orders September.</p>';
}

if ($num10 > 0) { // If it ran OK, display the records.
   
     
    // Table header.
    echo '<table align="center" cellspacing="0" cellpadding="5">
	<hr>
		<center><h1>October</h1></center>
    <tr>
    <td align="center"><b>Order ID</b></td>
    <td align="center"><b>First Name</b></td>
	<td align="center"><b>Last Name</b></td>
	<td align="center"><b>Email</b></td>
	<td align="center"><b>Flower Arrangement</b></td>
	<td align="center"><b>Flower Type</b></td>
	<td align="center"><b>Deliver Month</b></td>
    </tr>
	
	
    ';
   
    // Fetch and print all the records.
    while ($row10 = mysqli_fetch_assoc($result10)) {
        echo ' 
		<tr>
        <td align="center">'. $row10['order_id'] . '</td>
        <td align="center">'. $row10['f_name'] . '</td>
		<td align="center">'. $row10['l_name'] . '</td>
		<td align="center">'. $row10['email'] . '</td>
		<td align="center">'. $row10['arr_flower'] . '</td>
		<td align="center">'. $row10['flower_type'] . '</td>
		<td align="center">'. $row10['d10'] . '</td>
        </tr>
        ';
    }	
   
     echo '</table>';
   
     mysqli_free_result ($result10); // Free up the resources.
	
	

} else { // If it did not run OK.
    echo '<hr>
	<p class="error">There are currently no registered orders October.</p>';
}

if ($num11 > 0) { // If it ran OK, display the records.
   
     
    // Table header.
    echo '<table align="center" cellspacing="0" cellpadding="5">
	<hr>
		<center><h1>November</h1></center>
    <tr>
    <td align="center"><b>Order ID</b></td>
    <td align="center"><b>First Name</b></td>
	<td align="center"><b>Last Name</b></td>
	<td align="center"><b>Email</b></td>
	<td align="center"><b>Flower Arrangement</b></td>
	<td align="center"><b>Flower Type</b></td>
	<td align="center"><b>Deliver Month</b></td>
    </tr>
	
	
    ';
   
    // Fetch and print all the records.
    while ($row11 = mysqli_fetch_assoc($result11)) {
        echo ' 
		<tr>
        <td align="center">'. $row11['order_id'] . '</td>
        <td align="center">'. $row11['f_name'] . '</td>
		<td align="center">'. $row11['l_name'] . '</td>
		<td align="center">'. $row11['email'] . '</td>
		<td align="center">'. $row11['arr_flower'] . '</td>
		<td align="center">'. $row11['flower_type'] . '</td>
		<td align="center">'. $row11['d11'] . '</td>
        </tr>
        ';
    }	
   
     echo '</table>';
   
     mysqli_free_result ($result11); // Free up the resources.
	
	

} else { // If it did not run OK.
    echo '<hr>
	<p class="error">There are currently no registered orders November.</p>';
}

if ($num12 > 0) { // If it ran OK, display the records.
   
     
    // Table header.
    echo '<table align="center" cellspacing="0" cellpadding="5">
	<hr>
		<center><h1>December</h1></center>
    <tr>
    <td align="center"><b>Order ID</b></td>
    <td align="center"><b>First Name</b></td>
	<td align="center"><b>Last Name</b></td>
	<td align="center"><b>Email</b></td>
	<td align="center"><b>Flower Arrangement</b></td>
	<td align="center"><b>Flower Type</b></td>
	<td align="center"><b>Deliver Month</b></td>
    </tr>
	
	
    ';
   
    // Fetch and print all the records.
    while ($row12 = mysqli_fetch_assoc($result12)) {
        echo '
		<tr>
        <td align="center">'. $row12['order_id'] . '</td>
        <td align="center">'. $row12['f_name'] . '</td>
		<td align="center">'. $row12['l_name'] . '</td>
		<td align="center">'. $row12['email'] . '</td>
		<td align="center">'. $row12['arr_flower'] . '</td>
		<td align="center">'. $row12['flower_type'] . '</td>
		<td align="center">'. $row12['d12'] . '</td>
        </tr>
        ';
    }	
   
     echo '</table>';
   
     mysqli_free_result ($result12); // Free up the resources.
	
	

} else { // If it did not run OK.
    echo '<hr>
	<p class="error">There are currently no registered orders December.</p>';
}

mysqli_close($dbc); // Close the database connection.
echo '<br><br><br><br>';
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