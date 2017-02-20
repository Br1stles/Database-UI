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
<script> activate("L5"); </script>

<div class="stuff">
	<h2> Place Shipment </h2>

  <fieldset>
    <legend> Search Supplier </legend>
    <form action="shipment1.php" method="post">
      Supplier Name: 
      <input type="text" name="Name1">
      <input type="submit" value="Search">
    </form>
  </fieldset> <br>

  <fieldset>
    <legend> Select Supplier </legend>
    <form action="shipment3.php" method="post">
      Supplier Name: 
      <input type="text" name="Name" required>
      <input type="submit" value="Select">
    </form>
  </fieldset> <br>
  Suppliers: <br>
  <?php  
    if(isset($_POST["Name1"]))
      $Name1 = $_POST["Name1"];
    else
      $Name1 = "";
    include("queries/getSupplierByName.php");
  ?>

</div>

</body>
</html>