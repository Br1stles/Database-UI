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
<h2> Add Merchandise </h2>
  <?php 
    if(isset($_REQUEST["ShipmentNo"]))
      $ShipmentNo = $_REQUEST["ShipmentNo"];
    else
      echo "ShipmentNo Error";
    if(isset($_REQUEST["Supplier"]))
      $Supplier = $_REQUEST["Supplier"];
    else
      echo "Supplier Error";
    if(isset($_POST["Name"]))
      $Name = $_POST["Name"];
    else
      $Name = "";
    if(isset($_POST["Qty"]))
      $Qty = $_POST["Qty"];
    else
      $Qty = 1;
    if(isset($_POST["UPC"]))
      $UPC = $_POST["UPC"];
  ?>

  Current Shipment: <br>
  <?php 
    include("queries/getShipmentbyNum.php"); 
  ?> <br>
  Current Items: <br>
  <?php 
    include("queries/getShipmentItemsbyNum.php"); 
  ?> <br>

  <fieldset>
    <legend> Search Merchandise </legend>
    <form action="shipment5.php" method="post">
      Merchandise Name: 
      <input type="text" name="Name">
      <input type="hidden" name="ShipmentNo" value = "<?php echo $ShipmentNo; ?>" >
      <input type="hidden" name="Supplier" value = "<?php echo $Supplier; ?>" >
      <input type="submit" value="Search">
    </form>
  </fieldset> <br>

  <fieldset>
    <legend> Add Merchandise to Shipment</legend>
    <form action="shipment5.php" method="post">
      Merchandise UPC: <br>
      <input type="text" name="UPC"> <br>
      Quantity: <br>
      <input type="text" name="Qty"> <br>
      <input type="hidden" name="ShipmentNo" value = "<?php echo $ShipmentNo; ?>" >
      <input type="hidden" name="Supplier" value = "<?php echo $Supplier; ?>" >
      <input type="submit" value="Add">
    </form>
  </fieldset> <br>

  <form action="shipment6.php" method="post">
    <input type="hidden" name="ShipmentNo" value = "<?php echo $ShipmentNo; ?>" >
    <input type="submit" value="Finalize">
  </form> <br>

  <?php 
    if(isset($_POST["UPC"]))
    {
      include("queries/addMerchtoShipment.php");
    }

    include("queries/getMerchBySupplierByName.php");
  ?>



</div>