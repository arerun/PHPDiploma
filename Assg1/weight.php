<html>
<title>Recommended Weight</title>
<style>
fieldset{
	width : 600px;
}
</style>
<body>
<center>
<fieldset>
<h2> Find your recommended weight</h2>
<form>
<br>
 Height: <input type="text" name="height"/><br><br>
 Age:  <input type="text" name="age"/><br><br>
 <input type="submit"/>
</form> </fieldset>
<br>
<br>
<fieldset>
<b>Recommended Weight:
<?php
if (isset ($_GET['height']) && isset($_GET['age'])) {
 $height = intval($_GET['height']);
 $age = intval($_GET['age']);
 echo ($height-100 + $age/10)* 0.90;
 
}
?>
</b>
</fieldset>
</center>
</body>
</html>