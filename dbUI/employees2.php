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
<script> activate("L1"); </script>

<div class = "stuff">
  <h2> Add Employee </h2>

  <form action="employees2.php" method="post">
    <fieldset>
      <legend>Add Employee</legend>
      First Name:* <br>
      <input type="text" name="Fname" required> <br>
      Minit: <br>
     	<input type="text" name="Minit"> <br>
      Last Name:* <br>
     	<input type="text" name="Lname" required> <br>
     	Address: <br>
     	<input type="text" name="Address"> <br>
     	SSN:* <br>
     	<input type="text" name="SSN" required> <br>
     	Contact Number:* <br>
     	<input type="text" name="ContactNo" required> <br>
     	Salary*: <br>
     	<input type="text" name="Salary" required> <br> <br>
     	<input type="submit" value="Submit">
      *Required Fields <br>
    </fieldset>
  </form>

  <?php
  	if(isset($_POST["Minit"]))
    	$Minit = $_POST["Minit"] . " ";
  	else
    	$Minit = "";  
    if(isset($_POST["Address"]))
    	$Address = $_POST["Address"];
  	else
    	$Address = "";
    if(isset($_POST["ContactNo"]))
    	$ContactNo = $_POST["ContactNo"];
  	else
    	$ContactNo = "";
    if(isset($_POST["Fname"]))
    {
      $Name = $_POST["Fname"]." ".$Minit.$_POST["Lname"];
      $SSN = $_POST["SSN"];
      $Salary = $_POST["Salary"];

      include("queries/addEmployee.php");

    }
  ?>
  



</div>

</body>
</html>