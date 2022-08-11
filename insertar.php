<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "servidoriot01";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO devicestate (device, temperatura, humedad)
VALUES ('04', '1234', 'hhhh')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>