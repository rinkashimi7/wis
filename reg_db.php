<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "dayo_travel_access_user_db";

// Establish database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted and form fields are present and not empty
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    // Retrieve registration form data
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL statement using prepared statements
    $sql = "INSERT INTO dta_user_reg (full_name, email, password) VALUES (?, ?, ?)";

    // Create a prepared statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind the parameters with the values
    mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $password);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        // Registration successful
        echo "Registration successful!";
    } else {
        // Registration failed
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
} else {
    // Form not submitted or missing fields
    echo "Error: Form not submitted or required fields are missing.";
}

// Check for MySQL errors
if (mysqli_error($conn)) {
    echo "MySQL Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>