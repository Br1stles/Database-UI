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

<script> activate("T4"); </script>

<?php
  include("menus/transactionsMenu.php");
?>
<script> activate("L1"); </script>

<div class = "stuff">
  <h2> Place Transaction: </h2>

  <fieldset>
    <legend> Search Merchandise </legend>
    <form action="transations2.php" method="post">
      Merchandise Name: 
      <input type="text" name="Name">
      <input type="submit" value="Search">
    </form>
  </fieldset> <br>

  <fieldset>
  <legend> Select Merchandise </legend>
    <form action="transactions3.php" method="post">
      Merchandise UPC: <br>
      <input type="text" name="UPC" required> <br>
      Quantity: <br>
      <input type="text" name="Quantity"> <br>
      <input type="submit" value="Select">
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