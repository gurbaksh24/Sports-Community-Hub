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

$email = $_SESSION['email'];
$eventName = $_POST['eventName'];
$eventDate = $_POST['eventDate'];
$bookingDate = date('Y-m-d');

$sql = "INSERT INTO bookings (email, event_name, event_date, booking_date) VALUES ('$email', '$eventName', '$eventDate', '$bookingDate')";

if ($conn->query($sql) === TRUE) {
  header('Location: book_event.php?booking_success=true');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>