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
  	if(isset($_REQUEST["ShipmentNo"]))
    {
      $ShipmentNo = $_REQUEST["ShipmentNo"];
      include("queries/finalizeShipment.php");
    }
    else
      echo "ShipmentNo Error";




  ?>

  <form action="shipment1.php" method="post">
    <input type="submit" value="Continue">
  </form>



</div>