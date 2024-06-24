<?php include 'components/connect.php' ?>
<?php
    $query="SELECT  * from product WHERE status='APPROVED'";
    $result=mysqli_query($connect,$query);
    $v=mysqli_num_rows($result);  
?> 
<!DOCTYPE html> 
<html>
<head>
    <title>Product Descriptions</title>
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/adcard.css">
    <style>
        
    </style>
</head>
<body>   
<header>
      <img src="pics/logo.png" alt="logo" class="logoicon">
      <h2 class="logo">Agrosphere</h2>
      <nav class="navigation">
          <a href="homepage.html">Home</a>
          <a href="catalognew.php">Catalogue</a>
          <a href="#" class="active">Advertisements</a>
          <a href="userdash.php">Profile</a>
          <a href="#foot">Contact</a>
      </nav> 
    </header>
    <div class="heading">
        <h2>Listings by users</h2> 
</div>
    <div class="container">
    <?php if($v>0){
                while($row=mysqli_fetch_array($result))
                {  ?>
        <div class="product">
            <div class="prodimg">
                <img src="uploads/<?php echo $row['pimage1']; ?>" alt="Product 1">
            </div>
            <h2><?php echo $row['pname'] ?></h2>
            <p><?php echo "&#8377;".$row['prate']."/KG" ?></p>
            <a href="adshow.php?pid=<?php echo $row['pid']; ?>">View More</a>
        </div>
    <?php } ?>       
    </div>
    <?php
    }else {
        // Display a message when there are no new requests
        echo '<div class="empty"><marquee><i>No new items are available !</i></marquee></div>';
    } ?> 
</body>
</html>


