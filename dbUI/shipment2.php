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
<script> activate("L6"); </script>

<div class="stuff">
	<h2> Collect Shipment </h2>

  <?php 
    if(isset($_POST["ShipmentNo"]))
    {
      $ShipmentNo = $_POST["ShipmentNo"];
      include("queries/collectShipment.php"); // Change Shipment Received Value, Change Merchandise Stock, Change Account Balance
    }
  ?>

  <fieldset>
    <legend> Collect Shipment </legend>
    <form action="shipment2.php" method="post">
      Shipment No: 
      <input type="text" name="ShipmentNo">
      <input type="submit" value="Collect">
    </form>
  </fieldset> <br>

  Shipments: <br>
  <?php  
    include("queries/getUncollectedShipments.php");
  ?>

</div>

</body>
</html>