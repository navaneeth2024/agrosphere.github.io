<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Notification Form </title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- Font Awesome Cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="css/adform.css">
  <link rel="stylesheet" href="css/navbar.css">
  <style>
    .btn-primary {
    border-color: #ffffff;
}
  </style>
</head>
<body>
    <!-- Header -->
    <header >
      <img src="pics/logo.png" alt="logo" class="logoicon">
      <h2 class="logo">Agrosphere</h2>
      <nav class="navigation">
          <a href="admindash.php"><i class="fas fa-home"></i>Home</a>
      </nav>
    </header> <br><br><br><br><br><hr >
  <div class="container">
    <h2>Notification</h2>
    <form method="post" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="title">Title:</label>
          <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="desc">Description:</label>
          <textarea class="form-control" id="desc" rows="3" placeholder="Enter details" name="desc"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
    </form>
  </div>

  <!-- Include Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php 
include 'components/connect.php';
if(isset($_POST["submit"])) {
    $title=$_POST["title"];
    $desc=$_POST["desc"];
    

        

    $q = "INSERT INTO notification (nname,  ndesc) VALUES ('$title','$desc')";

    if(mysqli_query($connect, $q)) {
        echo "Successfully inserted";
        echo '<script>window.location.href = "admindash.php";</script>';
    } else {
        echo "Error";
    }
}
?>
