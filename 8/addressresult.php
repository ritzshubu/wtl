<?php
$servername = "localhost:3307";
$username = "root";
$password = "140324";
$dbname = "test1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from stud";
$result = $conn->query($sql);
echo "<table border='1'>

<tr>

<th>FirstName</th>

<th>Lastname</th>

<th>Age</th>

<th>Address</th>
<th>Pincode</th>

</tr>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
{
  echo "<tr>";
    echo "<td>" . $row["fname"]. "</td> ";
      echo "<td>". $row["lname"]."</td>";
     echo "<td> " . $row["age"]."</td> ";
     echo "<td>". $row["address"]."</td>";
     echo " <td> " . $row["pincode"]. "</td>";
echo "</tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";
$conn->close();
?>
