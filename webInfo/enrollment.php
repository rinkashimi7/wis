<!DOCTYPE html>
<html>
<head>
    <title>Enrollment Form</title>
</head>
<body>
    <h2>Enrollment Form</h2>

    <?php
    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $course = $_POST['course'];

        // Validate the form data (you can add more validation if needed)

        // Connect to the MySQL database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "gamboa";

        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert the enrollment data into the database
        $sql = "INSERT INTO enrollment (id, student_id, course_id) VALUES ('$id', '$student_id', '$course_id')";

        if ($conn->query($sql) === true) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="id" required><br>

        <label for="email">Email:</label>
        <input type="email" name="student_id" required><br>

        <label for="course">Course:</label>
        <input type="text" name="course_id" required><br>

        <input type="submit" value="Enroll">
    </form>
</body>
</html>