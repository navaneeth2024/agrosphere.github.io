<?php
session_start();
?>

<!DOCTYPE html> 
<html>
<head>
  <title>Ad Form </title>
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
          <a href="userdash.php"><i class="fas fa-home"></i>Home</a>
      </nav>
    </header> <br><br><br><br><br><hr >
  <div class="container">
    <h2>Advertisement Details</h2>
    <form method="post" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Item Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Item name" name="name" required>
        </div>
        <div class="form-group col-md-6">
          <label for="price">Item Price:</label>
          <input type="number" class="form-control" id="price" placeholder="Enter item price per kg" name="price" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-2">
            <label for="quantity">Item Quantity:</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter quantity" name="quantity" required>
                <div class="input-group-append">
                    <select class="custom-select" name="qtype" required>
                        <option selected>Select option</option>
                        <option value="KG">KiloGram</option>
                        <option value="Gram">Gram</option>
                        <option value="Nos.">Nos.</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="form-group col-md-6">
          <label for="num">Contact Number:</label>
          <input type="text" class="form-control" id="num" placeholder="Enter contact number" name="num" required>
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
          <label for="desc">Description:</label>
          <textarea class="form-control" id="desc" rows="3" placeholder="Enter details" name="desc" required></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
      <input type="hidden" name="place" value="<?php echo $_SESSION['place'] ?>">
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
    $uid=$_SESSION["uid"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $qty=$_POST["quantity"]; 
    $qty_type=$_POST["qtype"];
    $num=$_POST["num"];
    $place=$_POST["place"];
    $desc=$_POST["desc"];
    
        // Handle image upload 1
        $targetDir = "uploads/";
        $pimage1 = $_FILES["image1"]["name"];
        $targetFile1 = $targetDir . basename($pimage1);
        move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFile1);

        // Handle image upload 2
        $targetDir = "uploads/";
        $pimage2 = $_FILES["image2"]["name"];
        $targetFile2 = $targetDir . basename($pimage2);
        move_uploaded_file($_FILES["image2"]["tmp_name"], $targetFile2);

        

    $q = "INSERT INTO product (uid,pname, prate,pquantity ,qty_type , pcontact, pplace, pdesc, pimage1, pimage2) 
          VALUES ('$uid','$name', '$price', '$qty','$qty_type', '$num', '$place', '$desc', '$pimage1', '$pimage2')";

    if(mysqli_query($connect, $q)) {
        echo "Successfully inserted";
        echo "<script>window.location.href = 'product-success.html';</script>";
    } else {
        echo "Error";
    }
}
?>
