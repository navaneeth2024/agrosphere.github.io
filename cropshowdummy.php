<?php 
  include 'components/connect.php';
    $cid=$_GET["cid"];

    $n="select * from cropdata where cid='$cid'";
    $result=mysqli_query($connect,$n);
    $v=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result); 
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
    <link rel="stylesheet" href="css/cropshow.css">
    <link rel="stylesheet" href="css/footerself.css">
</head>
<style type="text/css">
</style>
<body>
<header>
      <img src="pics/logo.png" alt="logo" class="logoicon">
      <h2 class="logo">Agrosphere</h2>
      <nav class="navigation">
          <a href="index.html">Home</a>
          <a href="catalognew.php" class="active">Catalogue</a>
          <a href="#">Advertisements</a>
          <a href="login.php">Login</a>
          <a href="rubber.html">Contact</a>
      </nav>
    </header> 

    <main>
		<span class="title"><CENTER><h2><u><?php echo " ".$row["cname"];?></u></h2></CENTER></span>
		<div class="para">
		  <h3>Introduction :-</h3><br>
		  <p><?php echo " ".$row["cdesc"];?></p>
	  </div>
		<!-- Define the slideshow container -->
		<div id="slideshow">
		  <div class="slide-wrapper">
			<!-- Define each of the slides and write the content -->
			<div class="slide">
			<img src="uploads/<?php echo $row['cimage1']; ?>" alt="Image1">
			</div>
			<div class="slide">
			<img src="uploads/<?php echo $row['cimage2']; ?>" alt="Image2">
			</div>
			<div class="slide">
			<img src="uploads/<?php echo $row['cimage3']; ?>" alt="Image3">
			</div>
		  </div>
		</div>
	  
		<div class="info">
		  <div class="para">
			<h3>Varieties in India:-</h3><br> 
			<p><?php echo " ".$row["cvarieties"];?></p>
		  </div>
		  <div class="para">
			<h3>Climate Required :-</h3> <br> 
			<p><?php echo " ".$row["cclimate"];?></p>
		  </div>
		  <div class="para">
			<h3>Soil Requirement:-</h3><br>
			<p><?php echo " ".$row["csoil"];?></p>
		  </div>
		  <div class="para">
			<h3>Land Preparation:- </h3><br>
			<p><?php echo " ".$row["cprep"];?></p>
		  </div>
		  <div class="para">
			<h3>Planting Season: - </h3><br>
			<p><?php echo " ".$row["cseason"];?></p>
		  </div>
		  <div class="para">
			<h3>Manures and Fertilizers :- </h3><br>
			<p><?php echo " ".$row["cfertilisers"];?></p>
		  </div>
		  <div class="para">
			<h3>Weed Control:-</h3> <br>
			<p><?php echo " ".$row["cweedcontrol"];?></p>
		  </div>
		  <div class="para">
			<h3>Pests and Diseases:-</h3><br>
			<p><?php echo " ".$row["cdisease"];?></p>
		  </div>
		  <div class="para">
			<p><?php echo " ".$row["cmisc"];?></p>
		  </div>
		</div>
		<span id="back"><button onclick="history.back()"><img src="pics/back-cata.png" alt=""></button></span>
	</main>
	<footer id="foot">
              <div class="footer-content">
                <div class="footer-section">
                  <h3>About Us</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod mauris in maximus consequat.</p>
                </div>
                <div class="footer-section">
                  <h3>Contact Us</h3>
                  <p>Email: info@example.com</p>
                  <p>Phone: +1 123 456 7890</p>
                  <p>Address: 123 Street, City, Country</p>
                </div>
                <div class="footer-section">
                  <h3>Follow Us</h3>
                  <div class="social-icons">
                    <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
                    <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
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
                  </ul>
                </div>
              </div>
              <div class="footer-bottom">
                <p>&copy; 2023 Crop Website. All rights reserved. | Designed by Your Name</p>
              </div>
            </footer> 
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

