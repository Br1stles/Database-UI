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

// Get SaleCost
$sql = "SELECT sum(M.Price * I.QuantitySold) as SaleCost 
        From ItemsSold as I, Merchandise as M
		    Where I.SaleNo = \"$TransactionNumber\"
              and I.UPC = M.UPC";

$result = $conn->query($sql);
$rows = $result->fetch_assoc();

$SaleCost = $rows["SaleCost"];


$sql = "UPDATE Sales as S
        SET S.SaleCost = $SaleCost
        Where S.SaleNo = \"$TransactionNumber\"";

// Set SaleCost in Sales
if($conn->query($sql))
{
  echo "Successfully Updated Transaction <br>";
}
else
{
  echo  "Error: ". $sql . "<br>" . $conn->error;
}

// Adjust Account Balance
$sql = "UPDATE Account as A, Sales as S
        SET A.Balance = A.Balance + S.SaleCost
        Where A.AccountNo = \"1111111111\"
          and S.SaleNo = \"$TransactionNumber\"";

if($conn->query($sql))
{
  echo "Successfully Increased Account Balance <br>";
}
else
{
  echo  "Error: ". $sql . "<br>" . $conn->error;
}

// Adjust Merchandise Stock
$sql = "UPDATE Merchandise as M, ItemsSold as I
        SET M.Stock = M.Stock - I.QuantitySold
        Where M.UPC = I.UPC
          and I.SaleNo = \"$TransactionNumber\"";

if($conn->query($sql))
{
  echo "Successfully Adjusted Stock <br>";
}
else
{
  echo  "Error: ". $sql . "<br>" . $conn->error;
}

// Update Numbers
$sql = "UPDATE Numbers as N
        SET N.Num = Num+1
        where Name = \"TransactionNo\"";
if($conn->query($sql))
{
  echo "Successfully Incremented TransactionNo <br>";
}
else
{
  echo  "Error: ". $sql . "<br>" . $conn->error;
}

$conn->close();

?>