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
s
<?php
  include("menus/stockMenu.php");
?>
<script> activate("L4"); </script>

<div class = "stuff">
	<h2> Suppliers: </h2>
	<fieldset>
		<legend> Search Supplier </legend>
		<form action="supplier2.php" method="post">
			Supplier Name: 
			<input type="text" name="Name1">
			<input type="submit" value="Search">
		</form>
		</fieldset> <br>

		<fieldset>
		<legend> Remove Supplier </legend>
		<form action="supplier2.php" method="post">
			Supplier Name: 
			<input type="text" name="Name2">
			<input type="submit" value="Remove">
		</form>
	</fieldset> <br>

	<?php  
		if(isset($_POST["Name2"]))
		{
			$Name2 = $_POST["Name2"];
			include("queries/removeSupplier.php");
		}

  		if(isset($_POST["Name1"]))
    		$Name1 = $_POST["Name1"];
    	else
    		$Name1 = "";
		include("queries/getSupplierByName.php");


	
	?>

</div>

</body>
</html>