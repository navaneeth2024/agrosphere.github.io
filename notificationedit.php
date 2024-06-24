<?php
session_start();
?>
<?php
include 'components/connect.php'; 
$n="SELECT * from notification ORDER BY ndatetime DESC";
$result=mysqli_query($connect,$n);
$v=mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Notification</title>
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
    .table{
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 15px;
  min-width: 100%;
  overflow: hidden;
  border-radius: 5px 5px 0 0;
}
table thead tr{
  color: #fff;
  background: #34AF6D;
  text-align: left;
  font-weight: bold;
}
.table th,
.table td{
  padding: 12px 15px;
}
.table tbody tr{
  border-bottom: 1px solid #ddd;
}
.table tbody tr:nth-of-type(odd){
  background: #f3f3f3;
}
.table tbody tr.active{
  font-weight: bold;
  color: #4AD489;
}
.table tbody tr:last-of-type{
  border-bottom: 2px solid #4AD489;
}
.table button{
  padding: 6px 20px;
  border-radius: 10px;
  cursor: pointer;
  background: transparent;
  border: 1px solid #4AD489;
}
.table button:hover{
  background: #4AD489;
  color: #fff;
  transition: 0.5rem;
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
    <div class="notiftable">
    <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th style="min-width: 150px;">Title</th>
                <th style="min-width: 630px;overflow: hidden;">Message</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
            <?php if($v>0){
                while($row=mysqli_fetch_array($result))
                {  ?>
              <tr>
                <td>#<?php echo $row['nid'];?></td>
                <td><?php echo $row['nname'];?></td>
                <td><?php echo $row['ndesc'];?></td>
                <td>
                <form method="POST" action="notificationdelete.php"><br>
                  <input type="hidden" name="nid" value="<?php echo $row['nid']; ?>">
                  <button type="submit" name="reject" onmouseover="this.style.color='white'; this.style.background='red';" onmouseout="this.style.color='black'; this.style.background='white';"><i class="fas fa-times"></i></button>
                  </form></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <?php
            }else{
              echo '<marquee><i>No new notifications are available !</i></marquee>';
            }
          ?>
    </div>
  </div>

  <!-- Include Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>


<?php

if (isset($_POST["reject"])) {
    $nid = $row1["nid"];
    $q1 = "DELETE FROM notification  WHERE nid = $nid"; // Corrected query
    if(mysqli_query($connect, $q1)) {
        echo "Successfully removed $nid";
        echo '<script>window.location.href = "admindash.php";</script>';
    } else {
        echo "Error";
    }
}
?>