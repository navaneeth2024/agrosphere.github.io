<?php include 'components/connect.php' ?>
<?php
    $query="SELECT * from product WHERE status='PENDING'";
    $result=mysqli_query($connect,$query);
    $v=mysqli_num_rows($result); 
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Product Descriptions</title>
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/adcard.css">
    <!-- Font Awesome Cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <style>
    .heading{
    height: fit-content;
    position: absolute;
    top: 130px;
    left: 20px;
}
.container{
    top:170px;
}
.a1{
    background-color: #063e15;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

 .a1:hover {
    background-color: #3f8953;
}
 .a2{
    background-color: #d70000;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

 .a2:hover {
    background-color: darkred;
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
    <div class="heading">
        <h2>New Requests</h2>
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
            <p><?php echo "Quantity: ".$row['pquantity']."".$row['qty_type']." left" ?></p>
            <p><?php echo "Contact: ".$row['pcontact'] ?></p>
            <p><p class="lead"><?php echo $row["pdesc"] ?></p></p>
            <form method="POST" >
                <input type="hidden" name="pid" value="<?php echo $row['pid']; ?>">
                <button type="submit" name="approve" class="a1">Approve</button>
                <button type="submit" name="reject" class="a2">Reject</button>       
            </form>
        </div>
    <?php }?>      
    </div>
    <?php
    }else {
        // Display a message when there are no new requests
        echo '<div class="empty"><marquee><i>No new requests are available !</i></marquee></div>';
    } ?> 
</body>
</html>

<?php

if (isset($_POST["approve"])) {
    $pid = $_POST["pid"];
    $q = "UPDATE product SET status = 'APPROVED' WHERE pid = $pid"; // Corrected query
    if(mysqli_query($connect, $q)) {
        echo "Successfully approved $pid";
        echo '<script>window.location.href = "adrequest.php";</script>';
    } else {
        echo "Error";
    }
}
elseif (isset($_POST["reject"])) {
    $pid = $_POST["pid"];
    $q = "UPDATE product SET status = 'REJECTED' WHERE pid = $pid"; // Corrected query
    if(mysqli_query($connect, $q)) {
        echo "Successfully removed $pid";
        echo '<script>window.location.href = "adrequest.php";</script>';
    } else {
        echo "Error";
    }
}
?>





