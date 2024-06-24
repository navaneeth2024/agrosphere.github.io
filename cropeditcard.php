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
    <link rel="stylesheet" href="css/catalognew.css">
    <link rel="stylesheet" href="css/footerself.css">
    <!-- Font Awesome Cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <style>
      .card .d1{
         background-color: #fff;
         color:black;
         border:solid black 1px;
      }
      .card .d1:hover {
         background-color: #DC143C;
         color:white;
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
   <div class="main">
      <!--cards -->
      <h3>PLANTATION</h3>
      <div class="col-md-3 ">
      <?php if($v>0)
                while($row=mysqli_fetch_array($result))
                {  ?>
            <div class="card">
               <img src="uploads/<?php echo $row['cimage1']; ?>" class="card-img-top" alt="Image">
               <h3 class="text-center"><?php echo $row['cname']; ?></h3>
                <input type="hidden" name="cid" value="<?php echo $row['cid']; ?>">
                <a href="cropeditform.php?cid=<?php echo $row['cid']; ?>" class="view-more btn btn-primary">Edit</a>
                <button type="submit" onclick="window.location.href='deletecrop.php?cid=<?php echo $row['cid']; ?>'" class="d1 view-more btn btn-primary">Delete</button>    
            </div>
            <?php } ?>
      </div>
   </div>
      <!--cards --> 
      <!-- <h3>SPICE</h3>
      <div class="card">
         <div class="image">
            <img src="pics/rubber.jpg">
         </div>
         <div class="des">
            <h3>RUBBER</h3>
            <button onclick="location.href='rubber.html'">Know More...</button>
         </div>
      </div>
      <h3>VEGETABLES</h3>
      <div class="card">
         <div class="image">
            <img src="pics/rubber.jpg">
         </div>
         <div class="des">
            <h3>RUBBER</h3>
            <button onclick="location.href='rubber.html'">Know More...</button>
         </div>
      </div> 
      <h3>FRUITS</h3>
      <div class="card">
         <div class="image">
            <img src="pics/rubber.jpg">
         </div>
         <div class="des">
            <h3>RUBBER</h3>
            <button onclick="location.href='rubber.html'">Know More...</button>
         </div>
      </div> -->

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>