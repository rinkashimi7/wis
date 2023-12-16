<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `instructor` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: instructor.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}