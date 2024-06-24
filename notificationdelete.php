<?php
include 'components/connect.php';
if (isset($_POST["reject"])) {
    $nid = $_POST["nid"];
    $q1 = "DELETE FROM notification  WHERE nid = $nid"; // Corrected query
    if(mysqli_query($connect, $q1)) {
        echo "Successfully removed $nid";
        echo '<script>window.location.href = "admindash.php";</script>';
    } else {
        echo "Error";
    }
}
?>