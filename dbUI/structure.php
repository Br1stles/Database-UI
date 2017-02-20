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

<script> activate("T0"); </script>

<?php
  include("menus/homeMenu.php");
?>
<script> activate("L1"); </script>

<div class="stuff">
	<h2> Database Tables: </h2>

  <h3>Employee:</h3>
  <table>
    <tr>
    <th>SSN</th>
    <th>Address</th>
    <th>ContactNo</th>
    <th>Name</th>
    <th>Salary</th>
    </tr>
  </table>

	<h3>Supplier:</h3>
	<table>
		<tr>
		<th>Name</th>
		<th>PhoneNo</th>
		<th>Address</th>
		</tr>
	</table>

	<h3>Merchandise:</h3>
	<table>
		<tr>
		<th>UPC</th>
		<th>Stock</th>
		<th>Price</th>
		<th>Supplier</th>
		<th>BuyCost</th>
		</tr>
	</table>

<!--
	<h3>Manager:</h3>
	<table>
		<tr>
		<th>SSN</th>
		<th>Username</th>
		<th>Password</th>
		</tr>
	</table>
-->

	<h3>Sales:</h3>
	<table>
		<tr>
		<th>SaleNo</th>
		<th>SaleCost</th>
		</tr>
	</table>

	<h3>ItemsSold:</h3>
	<table>
		<tr>
		<th>SaleNo</th>
		<th>Quantity</th>
		<th>UPC</th>
		</tr>
	</table>

	<h3>Account:</h3>
	<table>
		<tr>
		<th>AcountNo</th>
		<th>Balance</th>
		</tr>
	</table>

	<h3>Shipments:</h3>
	<table>
		<tr>
		<th>ShipmentNo</th>
		<th>Supplier</th>
		<th>DeliveryDate</th>
		<th>TotalCost</th>
    <th>Received</th>
		</tr>
	</table>

	<h3>Items Shipped:</h3>
	<table>
		<tr>
		<th>ShipmentNo</th>
		<th>UPC</th>
		<th>Quantity</th>
		</tr>
	</table>

  <h3>Numbers:</h3>
  <table>
    <tr>
    <th>ShipmentNo</th>
    <th>TransactionNo</th>
    </tr>
  </table>

</div>

</body>
</html>