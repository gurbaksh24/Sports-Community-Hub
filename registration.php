  <?php

    $servername = "localhost";
    $username = "root";
    $dbname = "sports_comm_hub";
      
    // Create connection
    $conn = new mysqli($servername, $username, '', $dbname);
      
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
      
    $email = $_POST['emailId'];
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $mobile = $_POST['mobileNumber'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO users (email, first_name, last_name, mobile, pass) VALUES ('$email', '$firstname', '$lastname', '$mobile', '$pass')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
   
  ?>