<html>
 <head>
 <style>
 .error {color: #FF0000;}
 </style>
 </head>

 <body>
<?php # Script 3.5 - calculator.php
$page_title = 'Widget Cost Calculator';
include ('./includes/header.html');
// Check if the form has been submitted.

if (isset($_POST['submitted'])) {
// Minimal form validation.

if (is_numeric($_POST['quantity']) && is_numeric($_POST['price']) && is_numeric($_POST['tax']) ) {
// Calculate the results.

$taxrate = $_POST['tax'] / 100; // Turn 5% into .05.
$total = ($_POST['quantity'] * $_POST['price']) * ($taxrate + 1);
// Print the results.

echo '<h1 id="mainhead">Total Cost</h1>
<p>The total cost of purchasing ' . $_POST['quantity'] . ' widget(s) at RM' . number_format
($_POST['price'], 2) . ' each, including a tax rate of ' . $_POST['tax'] . '%, is RM' .
number_format ($total, 2) . '.</p><p><br /></p>';
} else { // Invalid submitted values.
echo '<h1 id="mainhead">Error!</h1>
<p class="error">Please enter a valid quantity, price, and tax.</p><p><br /></p>';
}

} // End of main isset() IF.

// Leave the PHP section and create the HTML form.
?>
<h2>Widget Cost Calculator</h2>
<form action="calculator.php" method="post">
 <table>
 <tr>
 <td>Quantity:</td>
 <td><p><input type="text" name="quantity" size="5" maxlength="10" value= "
 <?php if (isset($_POST['quantity'])) echo $_POST['quantity']; ?>" /></p>
 </td>
 </tr>

 <tr>
 <td>Price: </td>
 <td><p> <input type="text" name="price" size="5" maxlength="10" value= "
 <?php if (isset($_POST['price'])) echo $_POST['price']; ?>" /></p>
 </td>
 </tr>

 <tr>
 <td>Tax:</td>
 <td> <p><input type="text" name="tax" size="5" maxlength="10" value= "
 <?php if (isset($_POST['tax'])) echo $_POST['tax']; ?>" /></p>
 </td>
 </tr>

 <tr>
 <td>
 <input type = "submit" name = "submit" value = "Calculate">
 </td>
 </tr>

 </table>
 <input type="hidden" name="submitted" value="TRUE" />

</form>
 </body>
</html>
<?php
include ('./includes/footer.html');
?>
