<!DOCTYPE html>
<html>
<head>
  <title> Kitties! </title>
  <link rel="stylesheet" type="text/css" href="styles/navBar.css">
  <link rel="stylesheet" type="text/css" href="styles/content.css">
  <script src = "scripts.js"></script>
</head>
<body>

<?php 
  include("menus/topNav.php");
?>

<script> activate("T2"); </script>

<?php
  include("menus/stockMenu.php");
?>
<script> activate("L1"); </script>

<div class = "stuff">
  <h2> Add Merchandise </h2>

  <form action="stock2.php" method="post">
    <fieldset>
      <legend>Add Item</legend>
      	UPC:* <br>
      	<input type="text" name="UPC" required> <br>
      	Stock:* <br>
     	<input type="text" name="Stock" required> <br>
     	Name:* <br>
     	<input type="text" name="Name" required> <br>
     	Price:* <br>
     	<input type="text" name="Price" required> <br>
     	Supplier:* <br>
     	<input type="text" name="Supplier" required> <br>
     	Buy Cost:* <br>
     	<input type="text" name="BuyCost" required> <br> <br>
     	<input type="submit" value="Submit">
        *Required Fields <br>
    </fieldset>
  </form>

  <?php
  	if(isset($_POST["UPC"]))
    	$UPC = $_POST["UPC"];
    if(isset($_POST["Stock"]))
    	$Stock = $_POST["Stock"];
    if(isset($_POST["Name"]))
    	$Name = $_POST["Name"];
    if(isset($_POST["Price"]))
    	$Price = $_POST["Price"];
   	if(isset($_POST["Supplier"]))
    	$Supplier = $_POST["Supplier"];
    if(isset($_POST["BuyCost"]))
    	$BuyCost = $_POST["BuyCost"];
    if(isset($_POST["UPC"]))
    {
      include("queries/addMerch.php");
    }
  ?>
  



</div>

</body>
</html>