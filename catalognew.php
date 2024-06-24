<?php include 'components/connect.php' ?>
<?php
$query="select * from cropdata";
$result=mysqli_query($connect,$query); 
$v=mysqli_num_rows($result);   
?> 
 
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalog</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/catalognew.css">
    <link rel="stylesheet" href="css/footerself.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    
</head>


<body>
  <header>
      <img src="pics/logo.png" alt="logo" class="logoicon">
      <h2 class="logo">Agrosphere</h2>
      <nav class="navigation">
          <a href="homepage.html">Home</a>
          <a href="#" class="active">Catalogue</a>
          <a href="adcard.php">Advertisements</a>
          <a href="userdash.php">Profile</a>
          <a href="#foot">Contact</a>
      </nav>
    </header> 
   <div class="main">
      <!--cards -->
      <h3>CROP INFORMATION</h3>
      <div class="col-md-3 ">
      <?php if($v>0)
                while($row=mysqli_fetch_array($result))
                {  ?>
            <div class="card">
               <img src="uploads/<?php echo $row['cimage1']; ?>" class="card-img-top" alt="Image">
               <h3 class="text-center"><?php echo $row['cname']; ?></h3>
                <a href="cropshow.php?cid=<?php echo $row['cid']; ?>" class="view-more btn btn-primary">View More</a>
            </div>
            <?php } ?>
      </div>
   </div>

      <footer id="foot" style="background-color: #063831;">
              <div class="footer-content">
                <div class="footer-section">
                <h3>About Us</h3>
                  <p>Explore extensive crop database, showcase and advertise your crops and discover available crops from other users.</p>
                </div>
                <div class="footer-section">
                  <h3>Contact Us</h3>
                  <p>Email: agrosphere.contact@gmail.com</p>
                  <p>Phone: +1 123 456 7890</p>
                  <p>Address: Amal Jyothi College of Engineering, Kanjirappally</p>
                </div>
                <div class="footer-section">
                  <h3>Follow Us</h3>
                  <div class="social-icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                  </div>
                </div>
                <div class="footer-section">
                  <h3>Quick Links</h3>
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Crops</a></li>
                    <li><a href="#">Advertisements</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
              <div class="footer-bottom">
                <p>&copy; 2023 Agrosphere Website. All rights reserved. | Designed by Group 11 [MINI-PROJECT]</p>
              </div>
            </footer> 

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>