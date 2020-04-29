<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username=$_GET['txt1'];
$password=$_GET['pass1'];

$sql = "SELECT username, password FROM user WHERE username='$username' and password='$password'"; 

if ($conn->query($sql) == TRUE) {
    header('Location: vehicle.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>