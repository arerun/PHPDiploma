<html>
<head>
<title>Coffee Bags</title>
<style>
fieldset{
	width : 600px;
}
</style>
</head>
<body>
<form action="bags_output.php" method="post">
<center>
<br><br><br>
<fieldset>
<h2> Coffee Bags</h2>
   <br>
   Name: <input type="text" name="name" size="20" maxlength="50" />
   <br>
   <br>
  <label for="date">DeliveryDate:</label> <input type="date" id="date" name="date">
   <br>
   <br>
  <label for="amount">Amount of  coffee bags: </label><input type="number" name="amount">
  <br><br>
  
  <input type="submit" name="submit" value="Submit"> 
</form>
</fieldset>
</center>
</body>
</html>