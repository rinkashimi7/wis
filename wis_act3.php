<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentinfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a new student record
function createStudent($username, $email)
{
    global $conn;
    
    $sql = "INSERT INTO studentinfo (username, email) VALUES ('$username', '$email')";
    
    if ($conn->query($sql) === true) {
        return "Student record created successfully.";
    } else {
        return "Error creating student record: " . $conn->error;
    }
}

// Retrieve all student records
function getAllStudents()
{
    global $conn;
    
    $sql = "SELECT * FROM studentinfo";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $students = array();
        
        while ($row = $result->fetch_assoc()) {
            $students[] = $row;
        }
        
        return $students;
    } else {
        return "No student records found.";
    }
}

// Update a student record
function updateStudent($id, $username, $email)
{
    global $conn;
    
    $sql = "UPDATE studentinfo SET username='$username', email='$email' WHERE id=$id";
    
    if ($conn->query($sql) === true) {
        return "Student record updated successfully.";
    } else {
        return "Error updating student record: " . $conn->error;
    }
}

// Delete a student record
function deleteStudent($id)
{
    global $conn;
    
    $sql = "DELETE FROM studentinfo WHERE id=$id";
    
    if ($conn->query($sql) === true) {
        return "Student record deleted successfully.";
    } else {
        return "Error deleting student record: " . $conn->error;
    }
}

// Usage example:

// Create a new student
echo createStudent("John Doe", "john@example.com");

// Retrieve all students
$students = getAllStudents();
print_r($students);

// Update a student record
echo updateStudent(1, "Jane Smith", "jane@example.com");

// Delete a student record
echo deleteStudent(1);

// Close the database connection
$conn->close();
?>cd