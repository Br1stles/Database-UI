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
    if(isset($_POST["SSN"]))
    {
      $SSN = $_POST["SSN"];
      include("queries/getEmployeesBySSN.php");
    }
	?>

  <fieldset>
    <legend> Update Employee </legend>
    <form action="employees6.php" method="post">
      Employee SSN: <br>
      <input type="text" name="SSN2"><br>
      Employee Name: <br>
      <input type="text" name="Name"><br>
      Employee Address: <br>
      <input type="text" name="Address"><br>
      Employee ContactNo: <br>
      <input type="text" name="ContactNo"><br>
      Employee Salary: <br>
      <input type="text" name="Salary"><br>
      <input type="hidden" name="SSN" value="<?php echo $SSN; ?>">
      <input type="submit" value="Update">
    </form>
  </fieldset> <br>



</div>

</body>
</html>