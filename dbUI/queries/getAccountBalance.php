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

$sql = "SELECT AccountNo, Balance
        From Account";

$result = $conn->query($sql);	

if ($result->num_rows > 0) {
   echo "<table><tr>
   <th>AccountNo</th>
   <th>Balance</th>
   </tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo 
       "<tr>
       <td>" . $row["AccountNo"]. "</td>
       <td>" . $row["Balance"]. "</td>
       </tr>";
   }
   echo "</table>";
} 
else {
   echo "0 results...scrub";
}

$conn->close();
?>  
