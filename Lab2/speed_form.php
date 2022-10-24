<html>
<head>
<title>Speed Form</title>
<?php 
// Validate speed
if (!empty($_POST['speed'])) {
$speed = $_POST['speed'];
} else {
$speed = NULL;
echo '<h1> Error </h1>';
echo '<p><b>You forgot to enter your speed!</b></p>';
}
?>
</head>
<body>
<h1> Speed Converter </h1>
<form action="speed_result.php" method="post">
<fieldset><legend>Calculate speed:</legend>
<p><b>Speed:</b> <input type="text" name="speed" size="20" maxlength="40" /></p>
<p><b>From : Miles per Hour(MPH)</b> <size="20" maxlength="40" /></p>
<p><b>To : Kilometer per Hour(KPH)</b> <size="20" maxlength="40" /></p>

</fieldset>
<div align="left"><input type="submit" name="submit" value="Calculate" /></div>
</form>
</body>


</html>
