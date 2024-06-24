<?php include 'components/connect.php' ?> 
<?php
session_start();
$query="select * from registration";
$result=mysqli_query($connect,$query);
$v=mysqli_num_rows($result);  
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>admindash</title>
  <link rel="stylesheet" href="css/admindash.css" />
  
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <style>
    #email{
      text-transform:lowercase;
    }
  </style>
</head>
<body>
  <div class="container" id="blur">
    <nav>
      <ul>
        <li><a href="#" class="logo">
        <img src="<?php echo "uploads/".$_SESSION['aprofilepic']; ?>" class="profile-img" />
          <span class="nav-item">Admin</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="login.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1>Welcome <?php echo " ".$_SESSION["aname"];?></h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <h5>Admin</h5>
      <div class="users">
        <div class="card" style="margin-left:8%">
          <!-- <img src="./pic/img1.jpg"> -->
          <i class="fas fa-seedling" style="font-size:5em;"></i><br>
          <br><h4>add crop details</h4>
          <p>#description</p>
          <button onclick="location.href='cropform.php';">ADD</button>
        </div>
        <div class="card" >
          <!-- <img src="./pic/img1.jpg"> -->
          <i class="fas fa-seedling" style="font-size:5em;"></i><br>
          <br><h4>Edit crop details</h4>
          <p>#description</p>
          <button onclick="location.href='cropeditcard.php';">EDIT</button>
        </div>
        <div class="card" >
          <!-- <img src="./pic/img1.jpg"> -->
          <i class="fas fa-question-circle" style="font-size:5em;"></i><br>
          <br><h4>view requests</h4>
          <p>#description</p>
          <button onclick="location.href='adrequest.php';">VIEW</button>
        </div>
        <div class="card">
          <i class="fas fa-bullhorn" style="font-size: 5em;"></i><br>
          <br>
          <h4>Notifications</h4>
          <p>#description</p>
          <div class="button-row">
            <button onclick="location.href='notificationform.php';">ADD</button>
            <button onclick="location.href='notificationedit.php';">MANAGE</button>
          </div>
        </div>

      </div>

      <section class="attendance">
        <div class="attendance-list">
          <h1>Users List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>View</th>
                <!-- <th>Delete</th> -->
              </tr>
            </thead>
            <div class="bodyt">
            <tbody>
            <?php if($v>0)
                while($row=mysqli_fetch_array($result))
                {  ?>
              <tr>
                <td>#<?php echo $row['uid'];?></td>
                <td><?php echo $row['name'];?></td>
                <td id="email"><?php echo $row['email'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td ><button id="btn1" onclick="window.location.href='userdetails.php?uid=<?php echo $row['uid']; ?>'">View</button></td>
                <!-- <td><button  onmouseover="this.style.color='white'; this.style.background='red';" onmouseout="this.style.color='black'; this.style.background='white';"><i class="fas fa-times"></i></button></td> -->
              </tr>
              <?php } ?>
            </tbody></div>
          </table>
        </div>
      </section>
    </section>
  </div>
<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



