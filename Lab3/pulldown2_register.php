<html>
<head>
<title>Registration Form</title>
</head>
<body>
<form action="pulldown2_handle.php" method="post">
<fieldset><legend>Enter your information in the form below:</legend>
<p><b>Name:</b> <input type="text" name="name" size="20" maxlength="40" /></p>
<p><b>Phone No:</b> <input type="text" name="phone" size="20" maxlength="40" /></p>
<p><b>Email:</b> <input type="text" name="email" size="20" maxlength="40" /></p>
<b>Programme : </b>   
        <select name="program">';
        <option value="0">Please Select</option>
        <option value="BSE">BSE</option>
        <option value="DIT">DIT</option>
		<option value="DIM">DIM</option>
		<option value="DEC">DEC</option>
		<option value="DCNET">DCNET</option>
		<option value="DIA">DIA</option>

		
		</select>;
</fieldset>

<div align="left"><input type="submit" name="submit" value="Register" /></div>
</form>
</body>
</html>