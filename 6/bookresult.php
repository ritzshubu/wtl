<?php
$servername = "localhost:3307";
$username = "root";
$password = "140324";
$dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from books where title='$_POST[title]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
{
    echo "Title: " . $row["title"]. " - Author: " . $row["author"]. "- Publisher: " . $row["publisher"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

