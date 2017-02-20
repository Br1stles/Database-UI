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

$sql = "SELECT sum(M.BuyCost * I.Quantity) as TotalCost 
        From ItemsShipped as I, Merchandise as M
		    Where I.ShipmentNo = \"$ShipmentNo\"
          and I.ItemsShipped = M.UPC";

$result = $conn->query($sql);
$rows = $result->fetch_assoc();

$TotalCost = $rows["TotalCost"];

$sql = "UPDATE Shipments as S
        SET S.TotalCost = $TotalCost
        Where S.ShipmentNo = \"$ShipmentNo\"";

if($conn->query($sql))
{
  echo "Successfully Finalized Shipment";
}
else
{
  echo  "Error: ". $sql . "<br>" . $conn->error;
}

$sql = "UPDATE Numbers as N
        SET N.Num = Num+1
        where Name = \"ShipmentNo\"";

$conn->query($sql);


$conn->close();

?>