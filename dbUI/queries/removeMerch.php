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

$sql = "delete from Merchandise
		where UPC = \"$UPC\"";


if ($conn->query($sql) === TRUE) {
  echo "Record removed successfully";
} 
else {
  echo "Error: ". $sql . "<br>" . $conn->error;
}

$conn->close();

?>