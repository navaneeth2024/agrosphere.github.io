<?php 
   include 'components/connect.php';
    $uid=$_GET["uid"]; 
    $n="select * from product where uid='$uid'";
    $result=mysqli_query($connect,$n);
    $v=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myads</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/userads.css">
</head>
<body> 
<header>
      <img src="pics/logo.png" alt="logo" class="logoicon">
      <h2 class="logo">Agrosphere</h2>
      <nav class="navigation">
          <a href="homepage.html">Home</a>
          <a href="catalognew.php" >Catalogue</a>
          <a href="adcard.php">Advertisements</a>
          <a href="userdash.php" class="active">Profile</a>
          <a href="#foot">Contact</a>
      </nav>
</header> 


<div class="heading">
        <h2>My Items</h2>
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
                <a href="adedit.php?pid=<?php echo $row['pid']?>" class="a1">Edit</a>
                <button type="submit" class="a2" onclick="window.location.href='deleteproduct.php?pid=<?php echo $row['pid']; ?>'">Delete</button>  
                <p class="status">Status:<?php echo $row['status'] ?></p>     
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