<html>
<head>
<title>TV CHANNEL </title>
</head>
<body>
<form method="post" action="text5.php">
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
if(isset($_POST['btn_submit'])){
$tv = $_POST['tv'];
Switch ($tv){
case "TV106":
  echo "TV channel : $tv => Program : Tanyalah Ustaz"; break;
case "TV104":
  echo "TV channel : $tv => Program : National Geograhic"; break;
case "TV114":
  echo "TV channel : $tv => Program : Reflections"; break;
default:
  echo "TV channel: Not my favourite program";
}
}
?>
</body>
</html>