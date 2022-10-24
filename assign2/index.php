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
		text-align: center;
		font-size: 15;
		
	border: 1px solid grey;
	}
	</style>
</head>

<center>
<fieldset>

<?php 
$page_title = 'Welcome to this Flower Ordering Site';

echo'<br><br>';
echo'<image src ="/assign2/flora.png" width = "150" height = "150"/>';

include ('./includes/header.html');
?>

<h1 id=mainhead">Flora Florish</h1>

<br>
<image src ="/assign2/shop.jpg" width = "400" height = "250"/>
<br><br>
<p><h2>Come grab your flowers at Flora Florish</h2></p>
<h1>11.11 SALE !</h1>
<br>
<table align="center" cellspacing="5" cellpadding="5">
    <tr>
    <td align="center"><image src ="/assign2/vase.png" width = "110" height = "110"/></td>
    <td align="center"><b>Vase : 10% OFF</b></td>
    <td align="center"><image src ="/assign2/bouquet.png" width = "110" height = "110"/></td>
    <td align="center"><b>Bouquet: 20% OFF</b></td>
    </tr></table>
<table align="center" cellspacing="5" cellpadding="5">
    <tr>
	<td align="center"><image src ="/assign2/basket.png" width = "110" height = "110"/></td>
    <td align="center"><b>Basket: 20% OFF</b></td>
    <td align="center"><image src ="/assign2/box.png" width = "110" height = "110"/></td>
    <td align="center"><b>Box: 20%OFF</b></td>
    </tr></table>
<br><br><br><br>
<image src ="/assign2/daisies.jpg" width = "80" height = "80"/>
<image src ="/assign2/daisies.jpg" width = "80" height = "80"/>
<image src ="/assign2/daisies.jpg" width = "80" height = "80"/>
<image src ="/assign2/daisies.jpg" width = "80" height = "80"/>
<image src ="/assign2/daisies.jpg" width = "80" height = "80"/>
<br>
<?php
include ('./includes/footer.html');
?>
</center>
</fieldset>
<br><br>
</html>