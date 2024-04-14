<?php
// Database connection
$servername = "id"; // Change this to your database server
$username = "name"; // Change this to your database username
$email = "email"; // Change this to your database password
$dbname = "form_submissions"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $email, $message);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
// Insert data into database
$sql = "INSERT INTO  form_submissions (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
