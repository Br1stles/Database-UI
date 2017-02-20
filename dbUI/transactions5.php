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
<script> activate("L0"); </script>

<div class = "stuff">
  <h2> View Transaction: </h2>

  <fieldset>
    <legend> Select Transaction </legend>
    <form action="transactions5.php" method="post">
      Transaction Number:
      <input type="text" name="TransactionNo">
      <input type="submit" value="View">
    </form>
  </fieldset> <br>

  <?php 
    if(isset($_POST["TransactionNo"]))
    {
      $TransactionNumber = $_POST["TransactionNo"];
      if($TransactionNumber == "")
        include("queries/getTransactions.php");
      else
      {
        echo "Transaction Number: $TransactionNumber"; 
        include("queries/getItemsSoldbyNum.php");
      }
    }
    else
      include("queries/getTransactions.php");
  ?>

</div>

</body>
</html>