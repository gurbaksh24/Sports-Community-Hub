<?php
    $servername = "localhost";
    $username = "root";
    $dbname = "sports_comm_hub";
    
    // Create connection
    $conn = new mysqli($servername, $username, "", $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (email, first_name, last_name, mobile, pass) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sss", $email, $firstname, $lastname, $mobile, $pass);
    
    // set parameters and execute
    $email = $_REQUEST['emailId'];
    $firstname = $_REQUEST['firstName'];
    $lastname = $_REQUEST['lastName'];
    $mobile = $_REQUEST['mobileNumber'];
    $pass = $_REQUEST['password'];
    $stmt->execute();
    
    echo "New records created successfully";
    
    $stmt->close();
    $conn->close();
?>