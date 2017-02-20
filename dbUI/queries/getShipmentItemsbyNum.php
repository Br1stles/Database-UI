
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


$sql = "SELECT I.ItemsShipped, M.Name, I.Quantity, M.BuyCost 
        From ItemsShipped as I, Merchandise as M
        WHERE I.ShipmentNo = \"$ShipmentNo\"
          and I.ItemsShipped = M.UPC";

$result = $conn->query($sql);	

if ($result->num_rows > 0) {
   echo "<table><tr>
   <th>UPC</th>
   <th>Name</th>
   <th>Quantity</th>
   <th>BuyCost</th>
   </tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo 
       "<tr>
       <td>" . $row["ItemsShipped"]. "</td>
       <td>" . $row["Name"]. "</td>
       <td>" . $row["Quantity"]. "</td>
       <td>" . $row["BuyCost"]. "</td>
       </tr>";
   }
   echo "</table>";
} 
else {
   echo "Shipment Not Found";
}

$conn->close();
?>  
