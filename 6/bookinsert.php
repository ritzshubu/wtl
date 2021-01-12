<html>
<body>

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

$sql = "INSERT INTO books (title, author, publisher)
VALUES ('$_POST[title]', '$_POST[author]', '$_POST[publisher]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<form action="bookresult.php" method="post">
Title: <input type="text" name="title" />
<input type="submit" />
</form>
</body>
</html>