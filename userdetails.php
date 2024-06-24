<?php 
  include 'components/connect.php';
    $uid=$_GET["uid"];
    $n="select * from registration where uid='$uid'";
    $result=mysqli_query($connect,$n);
    $v=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result); 
/*n-m ,result-results-,v-u,row-rows */
    $m="select * from product where uid='$uid'";
    $results=mysqli_query($connect,$m);
    $u=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userdetails</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/userdetails.css">
     <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
      html{
        scroll-behavior:smooth;
      }
        .content2{
           margin-top: 116px;
           min-height: 60vh;
        }
        .avatar {
            width: 150px;
            height: 154px;
            object-fit: cover;
        }
        button.btn.btn-primary.viewbtn{
            background-color:green;
        }
        button.btn.btn-primary.viewbtn:hover{
            color:green;
            background-color:#fff;
            border:solid green 1px
        }
        button.btn.btn-outline-primary.ms-1.rembtn{
            color:red;
            border:solid red 1px
        }
        button.btn.btn-outline-primary.ms-1.rembtn:hover{
            background-color:red;
            color:#fff;
        }
    .btn-primary {
    border-color: #ffffff;
}
    </style>
</head>
<body>
<header >
      <img src="pics/logo.png" alt="logo" class="logoicon">
      <h2 class="logo">Agrosphere</h2>
      <nav class="navigation">
          <a href="admindash.php"><i class="fas fa-home"></i>Home</a>
      </nav>
</header>
<div class="content2" >
  <section style="background-color: #eee;">
    <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <h2>Details of User</h2>
        </nav>
      </div>
    </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="uploads/<?php echo $row['profilepic']; ?>" alt="avatar"
                class="rounded-circle img-fluid avatar" style="width: 150px;">
              <h5 class="my-3"><?php echo $row['name']; ?></h5>
              <p class="text-muted mb-1">UserID:<?php echo $row['uid']; ?></p><br>
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary viewbtn" onclick="location.href='#list'">View Products</button>
                 <button onclick="window.location.href='removeuser.php?uid=<?php echo $row['uid']; ?>'" type="submit" class="btn btn-outline-primary ms-1 rembtn" name="remove">Remove User</button>         
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Gender</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $row['gender']; ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Date of Birth</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $row['dob']; ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $row['email']; ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Mobile</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $row['phone']; ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">City/Village</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $row['place']; ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">District</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $row['district']; ?></p>
                </div>
              </div>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="list" id="list">
  <h3>List of items uploaded by user:</h3>
  <div class="cardcontainer">
    <?php if($u>0)
                while($rows=mysqli_fetch_array($results))
                {  ?>
        <div class="product">
            <div class="prodimg">
                <img src="uploads/<?php echo $rows['pimage1']; ?>" alt="Product 1">
            </div>
            <h2><?php echo $rows['pname'] ?></h2>
            <p><?php echo "&#8377;".$rows['prate']."/KG" ?></p>
            <a href="adshowadmin.php?pid=<?php echo $rows['pid']; ?>">View</a>
        </div>
    <?php } ?>       
    </div>
</div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
</body>
</html>