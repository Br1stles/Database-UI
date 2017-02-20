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

$sql = "SELECT count(Name) FROM Supplier Where Name = \"$Supplier\"";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $ValidSupplier = "True";
} 

$conn->close();

?>  