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
<h2>

  <?php
    $Success = "False";
    $ShipmentNo = 0;
    include("queries/getShipmentNo.php");
    $Received = "False";

    if(isset($_POST["Supplier"]))
      $Supplier = $_POST["Supplier"];
    else
      echo "ERROR";

    if(isset($_POST["UPC"]))
      $UPC = $_POST["UPC"];
    else
      $UPC = 1;

    if(isset($_POST["Qty"]))
      $Qty = $_POST["Qty"];
    else
      $Qty = 1;

    if(isset($_POST["Date"]))
      $Date = $_POST["Date"];
    else
      echo "ERROR";

    if( isset($_POST["Date"]) and isset($_POST["Supplier"]) )
    {
      include("queries/startShipment.php");
      echo "Shipment Created";
    }


  ?>

  <form action="shipment5.php" method="post">
    <input type="hidden" name="ShipmentNo" value = "<?php echo $ShipmentNo;?>" >
    <input type="hidden" name="Supplier" value = "<?php echo $Supplier;?>" >
    <input type="submit" value="Continue">
  </form>



</div>