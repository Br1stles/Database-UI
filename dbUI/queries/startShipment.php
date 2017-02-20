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

$sql = "Insert Shipments(ShipmentNo, Supplier, DeliveryDate, Received)
        values(\"$ShipmentNo\", \"$Supplier\", \"$Date\", \"$Received\" )";


if ($conn->query($sql) === TRUE) {
  $Success = "True";
  echo "New Shipment created successfully";
} 
else {
  echo "Error: ". $sql . "<br>" . $conn->error;
}

$sql = "Insert ItemsShipped(ShipmentNo, ItemsShipped, Quantity)
		values(\"$ShipmentNo\", \"$UPC\", \"$Qty\")";

if ($conn->query($sql) === TRUE) {
  $Success = "True";
  echo "Merchandise Added to Shipment";
} 
else {
  echo "Error: ". $sql . "<br>" . $conn->error;
}


$conn->close();

?>