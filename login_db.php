<?php
// Database configuration
$host = "localhost";
$username = "";

// Establish database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve login form data
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare SQL statement
$sql = "SELECT * FROM dta_user_reg WHERE email = '$email' AND password = '$password'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if any rows matched the login credentials
if (mysqli_num_rows($result) > 0) {
    // Login successful
    echo "Login successful!";
} else {
    // Invalid email or password
    echo "Invalid email or password.";
}

// Close the database connection
mysqli_close($conn);
?>