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
<script> activate("L2"); </script>

<div class = "stuff">
	<h2> Merchandise: </h2>
	<fieldset>
		<legend> Search Merchandise </legend>
		<form action="stock3.php" method="post">
			Merchandise Name: 
			<input type="text" name="Name">
			<input type="submit" value="Search">
		</form>
		</fieldset> <br>

		<fieldset>
		<legend> Remove Item </legend>
		<form action="stock3.php" method="post">
			Item UPC: 
			<input type="text" name="UPC">
			<input type="submit" value="Remove">
		</form>
	</fieldset> <br>

	<?php
		if(isset($_POST["UPC"]))
		{
			$UPC = $_POST["UPC"];
			include("queries/removeMerch.php");
		}

  		if(isset($_POST["Name"]))
    		$Name = $_POST["Name"];
    	else
    		$Name = "";
		include("queries/getMerchByName.php");
	?>

</div>

</body>
</html>