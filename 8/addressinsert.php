<html>
<body>

<?php
$servername = "localhost:3307";
$username = "root";
$password = "140324";
$dbname = "test1";

// Create connection
$conn = new mysqli($servername, $username,
 $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO stud (fname, lname, age, address, pincode)
VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[age]', '$_POST[address]', '$_POST[pincode]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<form action="addressresult.php" method="post">

<input type="submit" value="continue" />
</form>
</body>
</html>
