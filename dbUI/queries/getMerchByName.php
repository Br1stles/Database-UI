
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

if($Name == "")
{
  $sql = "SELECT UPC, Stock, Name, Price, Supplier, BuyCost From Merchandise";
}
else
{
  $sql = "SELECT UPC, Stock, Name, Price, Supplier, BuyCost From Merchandise
          WHERE Name Like '%" . $Name . "%'";
}

$result = $conn->query($sql);	

if ($result->num_rows > 0) {
   echo "<table><tr>
   <th>UPC</th>
   <th>Stock</th>
   <th>Name</th>
   <th>Price</th>
   <th>Supplier</th>
   <th>BuyCost</th>
   </tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo 
       "<tr>
       <td>" . $row["UPC"]. "</td>
       <td>" . $row["Stock"]. "</td>
       <td>" . $row["Name"]. "</td>
       <td>" . $row["Price"]. "</td>
       <td>" . $row["Supplier"]. "</td>
       <td>" . $row["BuyCost"]. "</td>
       </tr>";
   }
   echo "</table>";
} 
else {
   echo "0 results...scrub";
}

$conn->close();
?>  
