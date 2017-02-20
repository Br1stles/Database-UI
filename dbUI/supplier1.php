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
<script> activate("L3"); </script>

<div class = "stuff">
  <h2> Add Supplier </h2>

  <form action="supplier1.php" method="post">
    <fieldset>
      <legend>Add Item</legend>
      Name:* <br>
      <input type="text" name="Name" required> <br>
      PhoneNo:* <br>
      <input type="text" name="PhoneNo" required> <br>
      Address:* <br>
      <input type="text" name="Address" required> <br>
      <input type="submit" value="Submit">
        *Required Fields <br>
    </fieldset>
  </form>

  <?php
  	if(isset($_POST["Name"]))
    	$Name = $_POST["Name"];
    if(isset($_POST["PhoneNo"]))
    	$PhoneNo = $_POST["PhoneNo"];
    if(isset($_POST["Address"]))
    	$Address = $_POST["Address"];
    if(isset($_POST["Name"]))
    {
      include("queries/addSupplier.php");
    }
  ?>
  



</div>

</body>
</html>