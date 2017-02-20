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

$sql = "Insert ItemsSold(SaleNo, QuantitySold, UPC)
		values(\"$TransactionNumber\", \"$Quantity\", \"$UPC\")";


if ($conn->query($sql) === TRUE) {
  echo "Merchandise added successfully";
} 
else {
  echo "Error: ". $sql . "<br>" . $conn->error;
}

$conn->close();

?>