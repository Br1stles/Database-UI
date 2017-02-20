
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

$sql = "SELECT Name, Num From Numbers
        WHERE Name = \"ShipmentNo\"";

$result = $conn->query($sql);	


if ($result->num_rows == 1) {
   $row = $result->fetch_assoc();
   $ShipmentNo = $row["Num"];
} 
else {
   echo "Error in getShipmentNo.php";
}

$conn->close();
?>  
