
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


$sql = "SELECT SaleNo, SaleCost From Sales
        WHERE SaleNo = \"$TransactionNumber\"";
$result = $conn->query($sql);	

if ($result->num_rows > 0) {
   echo "<table><tr>
   <th>SaleNo</th>
   <th>SaleCost</th>
   </tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo 
       "<tr>
       <td>" . $row["SaleNo"]. "</td>
       <td>" . $row["SaleCost"]. "</td>
       </tr>";
   }
   echo "</table>";
} 
else {
   echo "Shipment Not Found";
}

$conn->close();
?>  
