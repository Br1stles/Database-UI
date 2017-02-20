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

<script> activate("T3"); </script>

<?php
  include("menus/accountMenu.php");
?>
<script> activate("L0"); </script>

<div class = "stuff">
	<h2> Account: </h2>

  <?php 
    include("queries/getAccountBalance.php")
  ?>

</div>

</body>
</html>