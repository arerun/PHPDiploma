<html>
<head>
<title>TV CHANNEL </title>
</head>
<body>
<form method="post" action="tvchannel.php">
<fieldset><legend> TV Channel</legend>
<br>
<label>Choose TV Channel:</label>
<br>
<input type="radio" name="tv" value="TV106">TV106<br>
<input type="radio" name="tv" value="TV104">TV104<br>
<input type="radio" name="tv" value="TV114">TV114<br>
<input type="radio" name="tv" value="TVot">Others<br>
<input type="submit" name="btn_submit" value="Choose">
<br>
</form>
<?php
 if(isset($_POST['btn_submit']))
 {
 $tv = $_POST['tv'];

 if ($tv = "TV106")
 echo "TV channel : $tv => Program : Tanyalah Ustaz";
 elseif ($tv="TV104")
 echo "TV channel : $tv => Program : National Geograhic";
 elseif ($tv = "TV114")
 echo "TV channel : $tv => Program : Reflections";
else
 echo "TV channel: Not my favourite program";
 }
?>
</body>
</html>
