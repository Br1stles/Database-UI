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

if($SSN2 == "")
{ 
  echo "Pass on SSN <br>";
}
else
{
  $sql = "UPDATE Employee
          SET SSN = \"$SSN2\"
          Where SSN = \"$SSN\"";
  if($conn->query($sql))
      echo "Successfully Updated SSN<br>";
  else
    echo  "Error: ". $sql . "<br>" . $conn->error;
}

if($Name == "")
{
  echo "Pass on Name <br>";
}
else
{
  $sql = "UPDATE Employee
          SET Name = \"$Name\"
          Where SSN = \"$SSN\"";
  if($conn->query($sql))
      echo "Successfully Updated Name<br>";
  else
    echo  "Error: ". $sql . "<br>" . $conn->error;
}

if($Address == "")
{
  echo "Pass on Address <br>";
}
else
{
  $sql = "UPDATE Employee
          SET Address = \"$Address\"
          Where SSN = \"$SSN\"";
  if($conn->query($sql))
      echo "Successfully Updated Address<br>";
  else
    echo  "Error: ". $sql . "<br>" . $conn->error;
}

if($ContactNo == "")
{
  echo "Pass on ContactNo <br>";
}
else
{
  $sql = "UPDATE Employee
          SET ContactNo = \"$ContactNo\"
          Where SSN = \"$SSN\"";
  if($conn->query($sql))
      echo "Successfully Updated ContactNo<br>";
  else
    echo  "Error: ". $sql . "<br>" . $conn->error;
}

if($Salary == "")
{
  echo "Pass on Salary <br>";
}
else
{
  $sql = "UPDATE Employee
          SET Salary = \"$Salary\"
          Where SSN = \"$SSN\"";
  if($conn->query($sql))
      echo "Successfully Updated Salary<br>";
  else
    echo  "Error: ". $sql . "<br>" . $conn->error;
}

$conn->close();
?>