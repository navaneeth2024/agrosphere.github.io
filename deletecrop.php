<?php
session_start();
include 'components/connect.php';
$cid = $_GET['cid'];
$query="select * from cropdata WHERE cid = '$cid'";
$result=mysqli_query($connect,$query); 
$v=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Crop</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        
        .card {
            width: 300px;
            height: 200px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            font-family: 'Poppins', sans-serif;
            animation: slideIn 1s ease forwards;
            transform: translateY(-100%);
        }
        
        h3 {
            color: #333;
            font-size: 20px;
            text-align: center;
            margin-bottom: 10px;
        }
        
        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #388e3c; /* Darker green */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin: 0 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: #2e7d32; /* Darker green on hover */
        }
        
        .btn.cancel {
            background-color: #d32f2f; /* Darker red */
        }
        
        .btn.cancel:hover {
            background-color: #b71c1c; /* Darker red on hover */
        }
        
        @keyframes slideIn {
            0% {
                transform: translateY(-100%);
            }
            100% {
                transform: translateY(0%);
            }
        }
    </style>
</head>
<body>
    <form method="POST">
        <div class="card">
            <h3>Confirm to remove <?php echo $row['cname']?></h3>
            <div class="btn-container">
                <button type="submit" name='remove' class="btn">Confirm</button>
                <button type="submit" name='cancel' class="btn cancel">Cancel</button>
            </div>
        </div>
    </form>
</body>
</html>


<?php
if (isset($_POST['remove'])) {
    // Delete the product from the database
    $delete_query = "DELETE FROM cropdata WHERE cid = '$cid'";
    $delete_result = mysqli_query($connect, $delete_query);

    if ($delete_result) {
        // Product deleted successfully
        echo "Product deleted successfully.";
        header("Location: cropeditcard.php");
exit();
    } else {
        // Failed to delete the product
        echo "Failed to delete the product.";
    }
}
elseif (isset($_POST['cancel'])) {
    header("Location: cropeditcard.php");
}
?> 