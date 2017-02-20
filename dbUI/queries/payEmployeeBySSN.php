<?php

$user = "root";
$pass = "";
$db = "grocerydb";


// Create connection
$conn = new mysqli("localhost", $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 

$sql = ("UPDATE Account as A, Employee as E
		     Set A.Balance = A.Balance - E.Salary
         where E.SSN = \"$SSN\"");

if($conn->query($sql))
  echo "Employee Paid";
else
  echo "Error: ". $sql . "<br>" . $conn->error;


$conn->close();

?>