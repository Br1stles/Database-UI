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

$sql = "SELECT Att1, Att2, Att3 FROM TABLE";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr>
     <th>Att1</th>
     <th>Att2</th>
     <th>Att3</th>
     </tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo 
         "<tr>
         <td>" . $row["Att1"]. "</td>
         <td>" . $row["Att2"]. "</td>
         <td>" . $row["Att3"]. "</td>
         </tr>";
     }
     echo "</table>";
} 
else {
     echo "0 results...scrub";
}

$conn->close();

?>  