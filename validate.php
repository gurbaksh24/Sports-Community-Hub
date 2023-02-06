<?php
session_start();
$servername = "localhost";
$username = "root";
$dbname = "sports_comm_hub";
  
// Create connection
$conn = new mysqli($servername, $username, '', $dbname);
  
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  
$email = $_POST['emailid'];
$pass = $_POST['password'];


$sql = "SELECT email, pass FROM users WHERE email = '$email' AND pass = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    echo "Logged In successfully";
    $_SESSION['email'] = $email;
    header('Location: index.php');
}

$conn->close();

?>