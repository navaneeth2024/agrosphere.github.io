<?php include '../components/connect.php' ?>
<?php
$query="select * from cropdata";
$result=mysqli_query($connect,$query);
$v=mysqli_num_rows($result);  
?> 
<!DOCTYPE html>
<html>
<head>
  <title>Image Card</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="catalogue.css">
</head>
<body>
  <div class="container">
      <header>
            <img src="../pics/logo.png" alt="logo" class="logoicon">
            <h2 class="logo">Agrosphere</h2>
            <nav class="navigation">
                <a href="#">Home</a>
                <a href="catalogue.php"  class="active">Catalogue</a>
                <a href="#">Shop</a>
                <a href="dashboard.html">Profile</a>
                <a href="#foot">Contact</a>
            </nav>
        </header>

    <div class="mainb">
      <h3>PLANTATION</h3>
          <div class="mainc">
              <?php if($v>0)
                  while($row=mysqli_fetch_array($result))
                  {  ?>
                <div class="row">
                  <div class="card">
                      <img src="../uploads/<?php echo $row['cimage1']; ?>"  alt="Image">
                      <h3 class="text-center"><?php echo $row['cname']; ?></h3>
                      <a href="cshow.php?cid=<?php echo $row['cid']; ?>" class="view-more">View More</a>
                  </div>
                </div>
              <?php } ?>
          </div>
              <a href="../catalognew.php">cata</a>
        </div>   
  </div>

<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
</body>
</html>


