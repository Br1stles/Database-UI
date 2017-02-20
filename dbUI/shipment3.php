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
    $ValidSupplier = "False";
    if(isset($_POST["Name"]))
    {
      $Supplier = $_POST["Name"];
      include("queries/checkSupplier.php");
      if($ValidSupplier == "True")
        echo $Supplier . " Merchandise";
      else 
        echo "Invalid Supplier Name";
    }
    else
    {
      $Supplier = "";
      echo "Error";
    }

  ?>
  </h2>

  <var> Supplier </var>
  <?php echo $Supplier; ?>

  <fieldset>
    <legend> Select Merchandise/Set Delivery Date </legend>
    <form action="shipment4.php" method="post">
      UPC: <br>
      <input type="text" name="UPC" required> <br>
      Quantity:<br>
      <input type="text" name="Qty"> <br>
      Date: YYYY-MM-DD<br>
      <input type="text" name="Date" required> <br>
      <input type="hidden" name="Supplier" value = "<?php echo $Supplier;?>" >
      <input type="submit" value="Submit">
    </form>
  </fieldset> <br>

  <?php 
  if(isset($_POST["Name"]))
  {
    include("queries/getMerchBySupplier.php");
  }
  ?>

</div>
  




</body>
</html>