<html>
<head>
<title>Calendar</title>
</head>
<body>
<h1>Calendar</h1>
<form action="calendar.php" method="post">
<?php
// This script make a pull-down menus for an HTML form: months.
// The months is display in an array.
$months = array (1 => 'January', 'February', 'March', 'April', 'May',
'June', 'July', 'August', 'September', 'October', 'November', 'December');
// the months is display using the pull-down menu.
echo '<select name="month">';
foreach ($months as $key => $value) {
echo "<option value=\"$key\">$value</option>\n";
}
echo "</select>";
?>
</form>
</body>
</html>
