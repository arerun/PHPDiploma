<html>
<head>
<title>Multiplication</title>
</head>
<body>
<form>
<fieldset>
<p><b>1st Number:</b> <input type="text" name="num1" size="20" maxlength="40" /></p>
<p><b>2nd Number:</b> <input type="text" name="num2" size="20" maxlength="40" /></p>
</fieldset>
<input type="submit" />
</form>Result:

<?php
if (isset ($_GET['num1']) && isset($_GET['num2'])) {
 $num1 = intval($_GET['num1']);
 $num2 = intval($_GET['num2']);
 echo $num1 * $num2;
}
?>
</body>
</html>