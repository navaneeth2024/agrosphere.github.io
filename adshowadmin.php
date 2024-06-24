<?php 
    include 'components/connect.php';
    $pid=$_GET["pid"];

    $n="select * from product where pid='$pid'";
    $result=mysqli_query($connect,$n);
    $v=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>
        <!-- Font Awesome Cdn Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/adshowtemplate.cSS">
        <link rel="stylesheet" href="css/adshow.css">
    </head>
    <body>
        <!-- Navigation-->
        <header >
            <img src="pics/logo.png" alt="logo" class="logoicon">
            <h2 class="logo">Agrosphere</h2>
            <nav class="navigation">
                <a href="admindash.php"><i class="fas fa-home"></i>Home</a>
                <a href="#" onclick="history.back();"><i class="fas fa-arrow-left"></i>Back</a>
            </nav>
        </header>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-5 px-lg-2 my-5">
                <div class="row gx-2 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                        <div class="card">
                            <img class="card-img" src="uploads/<?php echo $row['pimage1']; ?>" alt="..." id="main_product_image"/>
                        </div>
                        <div class="thumbnail_images">
                            <ul id="thumbnail">
                                <img onclick="changeImage(this)" src="uploads/<?php echo $row['pimage1']; ?>">
                                <img onclick="changeImage(this)" src="uploads/<?php echo $row['pimage2']; ?>">
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 infocard">
                        <div class="small mb-1">PRODUCT ID:<?php echo " ".$row["pid"] ?></div>
                        <h1 class="display-5 fw-bolder"><?php echo $row["pname"] ?></h1>
                        <div class="fs-5 mb-5">
                            <span><?php echo "&#8377;".$row['prate']."/KG" ?></span>
                        </div>
                        <div class="d-flex">
                        <div class="fs-6 mb-5">
                            <span><?php echo "Quantity: ".$row['pquantity']."".$row['qty_type']." left" ?></span>
                        </div>   
                        </div>
                        <div class="fs-5 mb-5">
                            <span><i class="fas fa-phone"></i><?php echo "Contact: ".$row['pcontact'] ?></span>
                        </div>  
                        <div class="infocard">
                            <p class="lead"><?php echo $row["pdesc"] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
            function changeImage(element) {
                var main_prodcut_image = document.getElementById('main_product_image');
                main_prodcut_image.src = element.src;
            }
        </script>
    </body>
</html>
