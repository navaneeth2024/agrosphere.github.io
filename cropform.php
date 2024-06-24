<!DOCTYPE html>
<html>
<head>
  <title> Form </title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- Font Awesome Cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="css/cropform.css">
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
    <h2> Crop Details</h2>
    <form method="post" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
        </div>
        <div class="form-group col-md-6">
          <label for="description">Description:</label>
          <textarea class="form-control" id="description" rows="3" placeholder="Enter description" name="description" required></textarea>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="image1">Image1:</label>
          <input type="file" class="form-control-file" id="image1" name="image1" accept="image/*" required>
        </div>
        <div class="form-group col-md-6">
          <label for="image2">Image2:</label>
          <input type="file" class="form-control-file" id="image2" name="image2" accept="image/*">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="image3">Image3:</label>
          <input type="file" class="form-control-file" id="image3" name="image3" accept="image/*">
        </div>
        <div class="form-group col-md-6">
          <label for="varieties">Varieties:</label>
          <textarea class="form-control" id="varieties" rows="3" placeholder="Enter varieties" name="varieties"></textarea>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="climate">Climate:</label>
          <textarea class="form-control" id="climate" rows="3" placeholder="Enter climate" name="climate" required></textarea>
        </div>
        <div class="form-group col-md-6">
          <label for="soil">Soil:</label>
          <textarea class="form-control" id="soil" rows="3" placeholder="Enter soil" name="soil" required></textarea>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="preparation">Preparation:</label>
          <textarea class="form-control" id="preparation" rows="3" placeholder="Enter preparation" name="preparation"></textarea>
        </div>
        <div class="form-group col-md-6">
          <label for="season">Season:</label>
          <textarea class="form-control" id="season" rows="3" placeholder="Enter season" name="season"></textarea>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="fertilisers">Fertilisers:</label>
          <textarea class="form-control" id="fertilisers" rows="3" placeholder="Enter fertilisers" name="fertilisers"></textarea>
        </div>
        <div class="form-group col-md-6">
          <label for="weed-control">Weed Control:</label>
          <textarea class="form-control" id="weed-control" rows="3" placeholder="Enter weed control" name="weed_control"></textarea>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="diseases">Diseases:</label>
          <textarea class="form-control" id="diseases" rows="3" placeholder="Enter diseases" name="diseases"></textarea>
        </div>
        <div class="form-group col-md-6">
          <label for="misc">Miscellaneous:</label>
          <textarea class="form-control" id="misc" rows="3" placeholder="Enter miscellaneous details" name="misc"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
    </form>
  </div>

  <!-- Include Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <a href="ccard.php">card</a>
</body>
</html>

<?php 
include 'components/connect.php';
if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $desc = $_POST["description"];
    $varieties = $_POST["varieties"];
    $climate = $_POST["climate"];
    $soil = $_POST["soil"];
    $prep = $_POST["preparation"];
    $season = $_POST["season"];
    $fert = $_POST["fertilisers"];
    $weed = $_POST["weed_control"];
    $diseases = $_POST["diseases"];
    $misc = $_POST["misc"];

        // Handle image upload 1
        $targetDir = "uploads/";
        $image1 = $_FILES["image1"]["name"];
        $targetFile1 = $targetDir . basename($image1);
        move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFile1);

        // Handle image upload 2
        $targetDir = "uploads/";
        $image2 = $_FILES["image2"]["name"];
        $targetFile2 = $targetDir . basename($image2);
        move_uploaded_file($_FILES["image2"]["tmp_name"], $targetFile2);

        // Handle image upload 3
        $targetDir = "uploads/";
        $image3 = $_FILES["image3"]["name"];
        $targetFile3 = $targetDir . basename($image3);
        move_uploaded_file($_FILES["image3"]["tmp_name"], $targetFile3);

    $q = "INSERT INTO cropdata (cname,cdesc,cimage1,cimage2,cimage3,cvarieties,cclimate,csoil,cprep,cseason,cfertilisers,cweedcontrol,cdisease,cmisc) 
          VALUES ('$name', '$desc', '$image1','$image2','$image3', '$varieties', '$climate', '$soil', '$prep' , '$season' , '$fert' , '$weed' , '$diseases' , '$misc')";

    if(mysqli_query($connect, $q)) {
        echo "Successfully inserted";
    } else {
        echo "Error";
    }
}
?>
