<?php
session_start();
?>
<?php
include 'components/connect.php';
$cid=$_GET["cid"];
$n="select * from cropdata where cid=$cid";
$result=mysqli_query($connect,$n);
$v=mysqli_num_rows($result);
?>
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
    <h2> Crop Edit</h2>
    <?php if($v>0)
    while($row=mysqli_fetch_array($result))
    { ?>
    <form method="post" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Name:</label>
          <?php echo'<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="' . $row["cname"] . '">'?>
        </div>
        <div class="form-group col-md-6">
          <label for="varieties">Varieties:</label>
          <?php echo'<textarea class="form-control" id="varieties" rows="3" placeholder="Enter varieties" name="varieties">' . $row["cvarieties"] . '</textarea>'?>
        </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-6">
          <label for="description">Description:</label>
          <?php echo'<textarea class="form-control" id="description" rows="3" placeholder="Enter description" name="description">' . $row["cdesc"] . '</textarea>'?>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="climate">Climate:</label>
          <?php echo'<textarea class="form-control" id="climate" rows="3" placeholder="Enter climate" name="climate">' . $row["cclimate"] . '</textarea>'?>
        </div>
        <div class="form-group col-md-6">
          <label for="soil">Soil:</label>
          <?php echo'<textarea class="form-control" id="soil" rows="3" placeholder="Enter soil" name="soil">' . $row["csoil"] . '</textarea>'?>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="preparation">Preparation:</label>
          <?php echo'<textarea class="form-control" id="preparation" rows="3" placeholder="Enter preparation" name="preparation">' . $row["cprep"] . '</textarea>'?>
        </div>
        <div class="form-group col-md-6">
          <label for="season">Season:</label>
          <?php echo'<textarea class="form-control" id="season" rows="3" placeholder="Enter season" name="season">' . $row["cseason"] . '</textarea>'?>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="fertilisers">Fertilisers:</label>
          <?php echo'<textarea class="form-control" id="fertilisers" rows="3" placeholder="Enter fertilisers" name="fertilisers">' . $row["cfertilisers"] . '</textarea>'?>
        </div>
        <div class="form-group col-md-6">
          <label for="weed-control">Weed Control:</label>
          <?php echo'<textarea class="form-control" id="weed-control" rows="3" placeholder="Enter weed control" name="weed_control">' . $row["cweedcontrol"] . '</textarea>'?>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="diseases">Diseases:</label>
          <?php echo'<textarea class="form-control" id="diseases" rows="3" placeholder="Enter diseases" name="diseases">' . $row["cdisease"] . '</textarea>'?>
        </div>
        <div class="form-group col-md-6">
          <label for="misc">Miscellaneous:</label>
          <?php echo'<textarea class="form-control" id="misc" rows="3" placeholder="Enter miscellaneous details" name="misc">' . $row["cmisc"] . '</textarea>'?>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="update" >Update</button>
    </form>
  <?php } ?>
  </div>

  <!-- Include Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php 
include 'components/connect.php';
if(isset($_POST["update"])) {
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

        

    $q = "UPDATE cropdata SET cname = '$name', cdesc = '$desc', cvarieties = '$varieties', cclimate = '$climate', csoil = '$soil', cseason = '$season', cfertilisers = '$fert', cweedcontrol = '$weed', cdisease = '$diseases', cmisc = '$misc' WHERE cid = $cid";

    if(mysqli_query($connect, $q)) {
        echo "Successfully updated";
    } else {
        echo "Error";
    }
}
?>
