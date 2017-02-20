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
<script> activate("L1"); </script>

<div class = "stuff">
	<h2> Pay Employee: </h2>

  <fieldset>
    <legend> Search Employee </legend>
    <form action="account2.php" method="post">
      Employee Name: 
      <input type="text" name="Name">
      <input type="submit" value="Search">
    </form>
  </fieldset> <br>

  <fieldset>
    <legend> Pay Employee </legend>
    <form action="account2.php" method="post">
      Employee SSN: 
      <input type="text" name="SSN">
      <input type="submit" value="Search">
    </form>
  </fieldset> <br>

  <?php
    if(isset($_POST["Name"]))
      $Name = $_POST["Name"];
    else
      $Name = "";
    include("queries/getEmployeesByName.php");

    if(isset($_POST["SSN"]))
    {
      $SSN = $_POST["SSN"];
      include("queries/payEmployeeBySSN.php");
    }
  ?>

</div>

</body>
</html>