<?php

include "db_conn.php";

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $address = $_POST['address'];
  
  $sql = "INSERT INTO `student`(`id`, `name`, `email`, `dob`, `address`) VALUES (NULL,'$name','$email','$dob', '$address')";

  $result = mysqli_query($conn, $sql);

  if($result) {
    header("Location: students.php?msg.=New Record Has Been Successfully Created");
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>Student Information System</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #ffc107;">
      Student Information System
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New Student</h3>
         <p class="text-muted">Complete The Necessary Details To Add a New Student</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label" required>Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="Juan Dela Cruz">
               </div>

               <div class="col">
                  <label class="form-label" required>Email:</label>
                  <input type="email" class="form-control" name="email" placeholder="user@gmail.com">
               </div>
            </div>

            <div class="col">
                  <label class="form-label" required>Date of Birth:</label>
                  <input type="date" class="form-control" name="dob" placeholder="Date of Birth">
               </div>
            </div>

            <div class="mb-3">
            <label class="form-label" required>Address:</label>
                  <input type="text" class="form-control" name="address" placeholder="Address">
            </div>

        

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="students.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>