<?php
session_start();
?>

<?php 
    include 'components/connect.php';
    $n="select * from registration";
    $result=mysqli_query($connect,$n);
    $v=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
?>
<?php
$query="SELECT * from notification ORDER BY ndatetime DESC";
$results=mysqli_query($connect,$query);
$num=mysqli_num_rows($results);   
?>

<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>userdash</title>
  <link rel="stylesheet" href="css/userdash.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <style>
    .notification{
      margin-top: 20px;
      text-transform: capitalize;

      }
    .notification-list{
      width: 100%;
      
      padding: 10px;
      margin-top: 10px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
      }
      .not-list-sub{
        max-height:200px;
        overflow:auto;
      }
    nav{
      position: sticky;
      width:90px;
      height:100vh;
    }
    .notification-data{
      border-bottom:solid 1px #9c89893d;
}
  </style>
</head>
<body>
  <div class="container">
    <nav >
      <ul>
        <li><a href="#" class="logo">
          <img src="pics/account_circle.svg" alt="">
          <span class="nav-item">user</span>
        </a></li>
        <li><a href="homepage.html">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>

        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">  
      <div class="main-top"> <!-- profile section -->
        <h1>Welcome user,</h1>
        <div class="profile-card">
          <div class="image">
            <img src="<?php echo "uploads/".$_SESSION['profpic']; ?>" class="profile-img" />
          </div>
          <div class="text-data">
            <span class="name"><?php echo " ".$_SESSION["name"];?></span>
          </div>
          <div class="analytics">
              <div class="data">
                <i class="bx bx-heart"></i>
                <span class="number"><?php echo "UID:".$_SESSION["uid"]."";?></span>
              </div>
              <div class="data">
                <i class="bx bx-message-rounded"></i>
                <span class="number"><?php echo " ".$_SESSION["place"];?></span>
              </div>
              <div class="data">
                <i class="bx bx-share"></i>
                <span class="number"><?php echo " ".$_SESSION["phone"];?></span>
              </div>
          </div>
        </div>
      </div>
      <div class="main-skills">    <!-- tabs section -->
        <div class="card">
          <i class="fas fa-camera" style="font-size:50px"></i>
          <h3>Post advertisement</h3>
          <p>Create an advertisementfor your product</p>
          <button onclick="location.href='adform.php'"><i class="fas fa-plus" style="font-size:10px"></i></button>
        </div>
        <div class="card">
          <i class="fas fa-wrench" style="font-size:50px"></i>
          <h3>My uploads</h3>
          <p>View your listings</p>
          <button onclick="window.location.href='userads.php?uid=<?php echo $_SESSION['uid']; ?>'">Manage</button>
        </div>
        <div class="card">
          <i class="fas fa-store" style="font-size:50px"></i>
          <h3>View Items</h3>
          <p>Browse through all listed items</p>
          <button onclick='location.href="adcard.php"'>View</button>
        </div>
        <div class="card">
          <i class="fas fa-leaf" style="font-size:50px"></i>
          <h3>Crop Catalogue</h3>
          <p>Browse through crops</p>
          <button onclick='location.href="catalognew.php"'>Know more</button>
        </div>
      </div>

      <section class="notification">   <!-- notification section -->
        <div class="notification-list">
          <h1><i class="fas fa-bullhorn "></i>Recent Notifications</h1>
          <div class="not-list-sub">
          <?php if($num>0){
                while($row1=mysqli_fetch_array($results))
                {  ?>
            <div class="notification-data">
              <marquee behavior="slide" direction="up" scrollamount="2" ><b><?php echo $row1['nname'].": "; ?></b><i><?php echo $row1['ndesc']; ?></i></marquee>
            </div>
            <?php
          }} else{?>
          <div class="notification-data">
              <marquee behavior="scroll" direction=""><i>No new notifications !</i></marquee>
            </div>
          <?php
        }?>
          </div>
        </div>
      </section>
  </div>
</body>
</html>
