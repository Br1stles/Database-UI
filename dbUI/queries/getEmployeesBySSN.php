
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


$sql = "SELECT SSN, Name, Address, ContactNo, Salary From Employee
        where SSN = $SSN";



$result = $conn->query($sql);	

if ($result->num_rows > 0) {
   echo "<table><tr>
   <th>SSN</th>
   <th>Name</th>
   <th>Address</th>
   <th>ContactNo</th>
   <th>Salary</th>
   </tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo 
       "<tr>
       <td>" . $row["SSN"]. "</td>
       <td>" . $row["Name"]. "</td>
       <td>" . $row["Address"]. "</td>
       <td>" . $row["ContactNo"]. "</td>
       <td>" . $row["Salary"]. "</td>
       </tr>";
   }
   echo "</table>";
} 
else {
   echo "0 results...scrub";
}

$conn->close();
?>  
