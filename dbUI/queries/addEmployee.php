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

$sql = "Insert Employee(SSN, Address, ContactNo, Name, Salary) 
        values(\"$SSN\", \"$Address\", \"$ContactNo\", \"$Name\", \"$Salary\")";


if ($conn->query($sql) === TRUE) {
  echo "New Record created successfully";
} 
else {
  echo "Error: ". $sql . "<br>" . $conn->error;
}

$conn->close();

?>