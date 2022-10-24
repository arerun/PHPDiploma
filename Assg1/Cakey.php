<html>
 <head>
 <title>Cake</title>
 <style>
 .error {color: #FF0000;}
 </style>
 </head>
 <body>
  <?php
 include ('./includes2/header.html');
  ?>
 <form action="cakey_output.php" method="post">
 <fieldset><legend><b>Contact Details</b></legend>
<p><b>Name:</b> <input type="text" name="name" size="20" maxlength="40" /></p>
<p><b>Address:</b> <input type="text" name="address" size="20" maxlength="40" /></p>
<p><b>PhoneNumber:</b> <input type="text" name="number" size="20" maxlength="40" /></p>
<p><b><label for="date">DeliveryDate:</b></label> <input type="date" id="date" name="date"></p>

</fieldset>
<br>
<br>
<fieldset>
<h2>Make Your Cake</h2>
    
<p><b>Size of the cake</b></p>
 <input type = "radio" name = "size" value = "Round cake 6-serves 8 people"><b>Round cake 6"-serves 8 people</b>
 <br><input type = "radio" name = "size" value = "Round cake 8-serves 12 people"><b>Round cake 8-serves 12 people</b>
 <br><input type = "radio" name = "size" value = "Round cake 10-serves 16 people"><b>Round cake 10-serves 16 people</b>
 <br><input type = "radio" name = "size" value = "Round cake 12-serves 30 people"><b>Round cake 12-serves 30 people</b>
<br>
<br>
 <p><b>Flavor </b></p><br>   
        <select name="flavor">';
        <option value="0">Please Select</option>
        <option value="Chocolate">Chocolate</option>
        <option value="Vanilla">Vanilla</option>
		<option value="Tiramisu">Tiramisu</option>
		<option value="Red Velvet">Red Velvet</option>
		<option value="Cheesecake">Cheesecake</option>
		<option value="Coffee">Coffee</option>
		</select>;
		<br>
		<br>
 <p><b>Fillings</p></b>
       <input type="checkbox" name="fillings[]" value="Lemon">
       <label for="fillings1"> <b>Lemon</b></label><br>
       <input type="checkbox" name="fillings[]" value="Custard">
       <label for="fillings2"> <b>Custard</b></b></label><br>
       <input type="checkbox" name="fillings[]" value="Fudge">
       <label for="fillings3"> <b>Fudge</b></label><br>
	   <input type="checkbox" name="fillings[]" value="Mocha">
       <label for="fillings4"> <b>Mocha</b></label><br>
	   <input type="checkbox" name="fillings[]" value="Raspberry">
       <label for="fillings5"> <b>Raspberry</b></label><br>
 
<br>
<br>
<div align="left"><input type="submit" name="submit" value="Register" /></div>
</form>
</fieldset>
 


<?php
include ('./includes2/footer.html');
?>
