<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login database";

// Create connection
$conn = new mysqli($username, $password);// Check connection string

$username= $_POST['tb1'];
$password = $_POST['tb2'];

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login database(username, password)
VALUES ('$username', '$password')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>