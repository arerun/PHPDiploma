<body>
<form>
<br>
 Height: <input type="text" name="num1"/><br><br>
 Age: <input type="text" name="num2"/><br><br>
 <input type="submit"/>
</form> Recommended Weight:
<?php
if (isset ($_GET['num1']) && isset($_GET['num2'])) {
 $num1 = intval($_GET['num1']);
 $num2 = intval($_GET['num2']);
 echo ($num1-100 + $num2/10)* 0.90;
}
?>
</body>
</html>