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
<script> activate("L0"); </script>

<div class = "stuff">
	<h2> Merchandise: </h2>
	<fieldset>
		<legend> Search Merchandise </legend>
		<form action="stock1.php" method="post">
			Merchandise Name: 
			<input type="text" name="Name">
			<input type="submit" value="Search">
		</form>
	</fieldset> <br>

	<?php
			if(isset($_POST["Name"]))
				$Name = $_POST["Name"];
			else
				$Name = "";
		include("queries/getMerchByName.php");
	?>

</div>

</body>
</html>