<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `course` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: course.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}