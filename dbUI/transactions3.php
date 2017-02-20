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
  <h2> Transaction in Progress: </h2>

  <?php 
    if(isset($_POST["TransactionNumber"]))
    {
      $TransactionNumber = $_POST["TransactionNumber"];
    }
    else
    {
      $TransactionNumber = 0;
      include("queries/getTransactionNo.php");
      include("queries/newTransaction.php");
    }

    echo "<br>Current Transaction:";
    include("queries/getTransactionByNum.php");

    if(isset($_POST["Quantity"]))
      $Quantity = $_POST["Quantity"];
    else
      $Quantity = 0;

    if(isset($_POST["UPC"]))
    {
      $UPC = $_POST["UPC"];
      include("queries/addMerchtoTransaction.php");
    }

    echo "Current Items:";
    include("queries/getItemsSoldbyNum.php");
  ?>

  <fieldset>
    <legend> Search Merchandise </legend>
    <form action="transations3.php" method="post">
      Merchandise Name: 
      <input type="text" name="Name">
      <input type="hidden" name="TransactionNumber" value = "<?php echo $TransactionNumber; ?>" > 
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
      <input type="hidden" name="TransactionNumber" value = "<?php echo $TransactionNumber; ?>" >
      <input type="submit" value="Select">
    </form>
  </fieldset> <br>

  <form action="transactions4.php" method="post">
    <input type="hidden" name="TransactionNumber" value = "<?php echo $TransactionNumber; ?>" >
    <input type="submit" value="Finalize">
  </form> <br>

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