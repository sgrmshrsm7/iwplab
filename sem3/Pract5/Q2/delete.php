<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_vnit";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM student WHERE name='Leonel Messi'";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
