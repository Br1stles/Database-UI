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

<script> activate("T1"); </script>

<?php
  include("menus/employeesMenu.php");
?>
<script> activate("L3"); </script>

<div class = "stuff">
	<h2> Employee: </h2>


  <?php
    $SSN = $_POST["SSN"];

    if(isset($_POST["SSN2"]))
    {
      $SSN2 = $_POST["SSN2"];
    }
    else
      $SSN2 = "";

    if(isset($_POST["Name"]))
    {
      $Name = $_POST["Name"];
    }
    else
      $Name = "";  

    if(isset($_POST["Address"]))
    {
      $Address = $_POST["Address"];
    }
    else
      $Address = "";

    if(isset($_POST["ContactNo"]))
    {
      $ContactNo = $_POST["ContactNo"];
    }
    else
      $ContactNo = "";

    if(isset($_POST["Salary"]))
    {
      $Salary = $_POST["Salary"];
    }
    else
      $Salary = "";

    include("queries/updateEmployee.php");
	?>

  <form action = "employees1.php">
    <input type="submit" value="Continue">
  </form>


</div>

</body>
</html>