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

$sql = "SELECT TotalCost
        From Shipments
        Where ShipmentNo = \"$ShipmentNo\"";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($row["TotalCost"] == 0)
{
  $sql = "DELETE FROM Shipments
          where ShipmentNo = \"$ShipmentNo\"";
  $conn->query($sql);

  $sql = "DELETE FROM ItemsShipped
          where ShipmentNo = \"$ShipmentNo\"";
  $conn->query($sql);

  echo "Removed Incomplete Shipment from Database";
}
else {

$sql = "UPDATE Shipments as S
		SET S.Received = TRUE
		where S.ShipmentNo = \"$ShipmentNo\"";
if($conn->query($sql))
{
  echo "Successfully Adjusted Shipment Recieved <br>";
}
else
{
  echo  "Error: ". $sql . "<br>" . $conn->error;
}

$sql = "UPDATE Account as A, Shipments as S
        SET A.Balance = A.Balance - S.TotalCost
        Where A.AccountNo = \"1111111111\"
          and S.ShipmentNo = \"$ShipmentNo\"";

if($conn->query($sql))
{
  echo "Successfully Decreased Account Balance <br>";
}
else
{
  echo  "Error: ". $sql . "<br>" . $conn->error;
}

$sql = "UPDATE Merchandise as M, ItemsShipped as I
        SET M.Stock = M.Stock + I.Quantity
        Where M.UPC = I.ItemsShipped
          and I.ShipmentNo = \"$ShipmentNo\"";

if($conn->query($sql))
{
  echo "Successfully Adjusted Stock <br>";
}
else
{
  echo  "Error: ". $sql . "<br>" . $conn->error;
}

}

$conn->close();

?>