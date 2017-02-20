
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


$sql = "SELECT ShipmentNo, Supplier, DeliveryDate From Shipments
        WHERE ShipmentNo = \"$ShipmentNo\"";
$result = $conn->query($sql);	

if ($result->num_rows > 0) {
   echo "<table><tr>
   <th>ShipmentNo</th>
   <th>Supplier</th>
   <th>DeliveryDate</th>

   </tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo 
       "<tr>
       <td>" . $row["ShipmentNo"]. "</td>
       <td>" . $row["Supplier"]. "</td>
       <td>" . $row["DeliveryDate"]. "</td>
       </tr>";
   }
   echo "</table>";
} 
else {
   echo "Shipment Not Found";
}

$conn->close();
?>  
