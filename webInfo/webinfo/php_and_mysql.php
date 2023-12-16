<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentrecord";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" ;
echo "<br><br>STUDENT INFORMATION<br><br>";

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "First Name: " . $row["FirstName"]. "<br>"
        ."Last Name: " . $row["LastName"]. "<br>" 
        ."Student ID: " . $row["StudentID"]. "<br>"
        ."Date of Birth: " . $row["DateOfBirth"]. "<br>"
        ."Email: " . $row["Email"]. "<br>"
        ."Contact Number: " . $row["Phone"]. "<br><br>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<br>COURSE<br><br>";

$sql = "SELECT * FROM course";
$result = $conn->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "Course ID: " . $row["CourseID"]. "<br>"
        ."Course Name: " . $row["CourseName"]. "<br>" 
        ."Credits: " . $row["Credits"]. "<br><br>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<br>ENROLLMENT<br><br>";

$sql = "SELECT * FROM enrollment";
$result = $conn->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "Enrollment ID: " . $row["EnrollmentID"]. "<br>"
        ."Student ID: " . $row["StudentID"]. "<br>"
        ."Course ID: " . $row["CourseID"]. "<br>"
        ."Enrollment ID: " . $row["EnrollmentID"]. "<br>"
        ."Student Grade: " . $row["Grade"]. "<br><br>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<br>INSTRUCTOR<br><br>";

$sql = "SELECT * FROM instructor";
$result = $conn->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "Instructor ID: " . $row["InstructorID"]. "<br>"
        ."First Name: " . $row["FirstName"]. "<br>"
        ."Last Name: " . $row["LastName"]. "<br>"
        ."Email: " . $row["Email"]. "<br>"
        ."Contact Number: " . $row["Phone"]. "<br><br>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>