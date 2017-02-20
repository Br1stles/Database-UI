
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

if($Name1 == "")
{
  $sql = "SELECT Name, PhoneNo, Address From Supplier";
}
else
{
  $sql = "SELECT Name, PhoneNo, Address From Supplier
          WHERE Name Like '%" . $Name1 . "%'";
}

$result = $conn->query($sql);	

if ($result->num_rows > 0) {
   echo "<table><tr>
   <th>Name</th>
   <th>PhoneNo</th>
   <th>Address</th>

   </tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo 
       "<tr>
       <td>" . $row["Name"]. "</td>
       <td>" . $row["PhoneNo"]. "</td>
       <td>" . $row["Address"]. "</td>
       </tr>";
   }
   echo "</table>";
} 
else {
   echo "0 results...scrub";
}

$conn->close();
?>  
