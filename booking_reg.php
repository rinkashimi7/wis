<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $package = $_POST['package'];
    $guest_pax = $_POST['guest_pax'];
    $cp_num = $_POST['cp_num'];
    $travel_date = $_POST['travel_date'];
    $travel_time = $_POST['travel_time'];
    

    $query = "INSERT INTO booking_reg (first_name, last_name, email, package, guest_pax, cp_num, travel_date, travel_time)
              VALUES ('$first_name', '$last_name', '$email', '$package', '$guest_pax', '$cp_num', '$travel_date', '$travel_time')";

    $result = mysqli_query($db, $query);

    if ($result) {
        header("Location: book_2.html");
        exit;
    } else {
        echo "Error adding record: " . mysqli_error($db);
    }
}

mysqli_close($db);
?>