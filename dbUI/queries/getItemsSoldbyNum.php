
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


$sql = "SELECT I.UPC, M.Name, I.QuantitySold, M.Price 
        From ItemsSold as I, Merchandise as M
        WHERE I.SaleNo = \"$TransactionNumber\"
          and I.UPC = M.UPC";

$result = $conn->query($sql);	

if ($result->num_rows > 0) {
   echo "<table><tr>
   <th>UPC</th>
   <th>Name</th>
   <th>Quantity</th>
   <th>Price</th>
   </tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo 
       "<tr>
       <td>" . $row["UPC"]. "</td>
       <td>" . $row["Name"]. "</td>
       <td>" . $row["QuantitySold"]. "</td>
       <td>" . $row["Price"]. "</td>
       </tr>";
   }
   echo "</table>";
} 
else {
   echo "No Items Yet Added";
}

$conn->close();
?>  
