<?php
session_start();
?>
<?php
include 'components/connect.php';
$pid=$_GET["pid"];
$n="select * from product where pid=$pid";
$result=mysqli_query($connect,$n);
$v=mysqli_num_rows($result); 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Ad Edit </title>
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
    <?php if($v>0)
    while($row=mysqli_fetch_array($result))
    { ?>
    <form method="post" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Item Name:</label>
            <?php echo '<input type="text" class="form-control" id="name" placeholder="Enter Item name" name="name" value="' . $row["pname"] . '">'?>
        </div>
        <div class="form-group col-md-6">
          <label for="price">Item Price:</label>
          <?php echo'<input type="number" class="form-control" id="price" placeholder="Enter item price per kg" name="price" value="' . $row["prate"] . '">'?>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-2">
            <label for="quantity">Item Quantity:</label>
            <div class="input-group">
                <?php echo '<input type="text" class="form-control" placeholder="Enter quantity" name="quantity" value="' . $row["pquantity"] . '">'?>
                <div class="input-group-append">
                    <select class="custom-select" name="qtype" >
                    <?php echo'<option value="' . $row["qty_type"] . '" selected>KiloGram</option>'?>
                        <option value="KG">KiloGram</option>
                        <option value="Gram">Gram</option>
                        <option value="Nos.">Nos.</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="form-group col-md-6">
          <label for="num">Contact Number:</label>
          <?php echo'<input type="text" class="form-control" id="num" placeholder="Enter contact number" name="num" value="' . $row["pcontact"] . '">'?>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="desc">Description:</label>
          <?php echo'<textarea class="form-control" id="desc" rows="3" placeholder="Enter details" name="desc" >' . $row["pdesc"] . '</textarea>'?>
        </div>
      </div>
      <button type="submit" class="btn1 btn btn-primary" name="update" >Update</button>
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
    $price = $_POST["price"];
    $qty=$_POST["quantity"]; 
    $qty_type=$_POST["qtype"];
    $num=$_POST["num"];
    $desc=$_POST["desc"];

    $q = "UPDATE product SET pname='$name',prate='$price',pquantity='$qty',qty_type='$qty_type',pcontact='$num',pdesc='$desc' where pid=$pid";

    if(mysqli_query($connect, $q)) {
        echo "Successfully updated";
        echo "<script>window.location.replace('userdash.php');</script>";
    } else {
        echo "Error";
    }
}
?>
