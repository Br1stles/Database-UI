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
<script> activate("L7"); </script>

<div class="stuff">
	<h2> Shipment History </h2>


  <fieldset>
    <legend> View Shipment Details </legend>
    <form action="shipment7.php" method="post">
      Shipment No: 
      <input type="text" name="ShipmentNo">
      <input type="submit" value="View">
    </form>
  </fieldset> <br>

  
  <?php  
    if(isset($_POST["ShipmentNo"]))
    {
      echo "Shipment: <br>";
      $ShipmentNo = $_POST["ShipmentNo"];
      include("queries/getShipmentItemsByNum.php");
    }
    else
    {
      echo "Shipments: <br>";
      include("queries/getShipments.php");
    }
  ?>

</div>

</body>
</html>