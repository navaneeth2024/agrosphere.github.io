<?php
session_start(); 
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/loginpage.css">
    <script src="js/validatelogin.js"></script>
</head>
<body>
    <section>
        <div class="contentBox">
            <div class="formBox">
                <h2>Login</h2>
                <form id="logform" method="POST" enctype="multipart/form-data">
                    <div class="inputBox">
                        <select name="usertype" id="utype" onchange='userChange();' onclick='document.getElementById("loginerror").style.opacity="0"' required>
                            <option value="" selected>Login As</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="inputBox">
                        <span>Phone/ID</span>
                        <input type="text" name="usernum" id="usernum" required  oninput="phoneCheck();" onkeypress='validateNumbersOnly(event)' onblur='clearError()'>
                    </div>
                    <div class="inputBox">
                        <span>Password</span>
                        <input type="password" name="pass" id="pass" required oninput="passCheck();" onblur='clearError()'>
                    </div>
                    <p id="loginerror"><br></p>
                    <p id="loginerror2"></p><p id="loginerror3"><br></p>
                    <div class="inputBoxSubmit">
                        <input type="submit" value="Sign in" name="signin" id="inputBox" >
                    </div>  
                </form>
                <!-- <button onclick="logincheck()" id="inputBox">Sign in</button> -->
                <div class="inputBoxDont">
                    <p>Don't Have An Account? <a href="registration.php">Sign Up</a></p>
                </div>
            </div>
        </div>
        <div class="imgBox">
            <img src="pics/login.jpg" alt="login">
        </div>
    </section>
    <div class="ellipse1"></div>
</body>
</html>


<?php  
include 'components/connect.php';
if(isset($_POST["signin"]))
        {
            $ph=$_POST["usernum"];
            $pass=$_POST["pass"];
            $role=$_POST["usertype"];
            if($role==="user"){
                $query="select * from registration where phone='$ph'";
                $result=mysqli_query($connect,$query);
                if(mysqli_num_rows($result)>0){
                    $query2="select * from registration where password='$pass' and phone='$ph'";
                    $result2=mysqli_query($connect,$query2);
                    if(mysqli_num_rows($result2)>0){
                        $row=mysqli_fetch_array($result); 
                        $_SESSION["uid"]=$row["uid"];
                        $_SESSION["name"]=$row["name"];
                        $_SESSION["profpic"]=$row["profilepic"];
                        $_SESSION["dob"]=$row["dob"];
                        $_SESSION["gen"]=$row["gen"];
                        $_SESSION["email"]=$row["email"];
                        $_SESSION["phone"]=$row["phone"];
                        $_SESSION["place"]=$row["place"];
                        $_SESSION["district"]=$row["district"];                       
                        echo "<script>window.location.replace('homepage.html');</script>";
                        exit();         
                        //redirect
                    }
                    else{
                        echo '<script>document.getElementById("loginerror").style.opacity="1";
                        document.getElementById("loginerror").style.color="red";
                        document.getElementById("loginerror").innerHTML="Your password is incorrect!";</script>';
                        //error message
                    }
                }
                else{
                echo '<script>document.getElementById("loginerror").style.opacity="1";
                document.getElementById("loginerror").style.color="red";
                document.getElementById("loginerror").innerHTML="Your username is incorrect!";</script>';
                //error message
                }
            }

            elseif($role==="admin"){
                $query="select * from admin where auserid='$ph'";
                $result=mysqli_query($connect,$query);
                if(mysqli_num_rows($result)>0){
                    $query2="select * from admin where apass='$pass' and auserid='$ph'";
                    $result2=mysqli_query($connect,$query2);
                    if(mysqli_num_rows($result2)>0){
                        $row=mysqli_fetch_array($result); 
                        $_SESSION["aid"]=$row["aid"];
                        $_SESSION["aname"]=$row["aname"];
                        $_SESSION["auserid"]=$row["auserid"];
                        $_SESSION["aprofilepic"]=$row["aprofilepic"];
                        echo "<script>window.location.replace('admindash.php');</script>";
                        exit();         
                        //redirect
                    }
                    else{
                        echo '<script>document.getElementById("loginerror").style.opacity="1";
                        document.getElementById("loginerror").style.color="red";
                        document.getElementById("loginerror").innerHTML="Your password is incorrect!";</script>';
                        //error message
                    }
                }
                else{
                echo '<script>document.getElementById("loginerror").style.opacity="1";
                document.getElementById("loginerror").style.color="red";
                document.getElementById("loginerror").innerHTML="Your userID is incorrect!";</script>';
                //error message
                }
            }
        }

?>

<?php
// Fetch existing ndatetime values from the notification table
$selectQuery = "SELECT ndatetime FROM notification";
$resultd = mysqli_query($connect, $selectQuery);
date_default_timezone_set('Asia/Kolkata');

if ($resultd) {
    while ($rowd = mysqli_fetch_assoc($resultd)) {
        $insertTime = $rowd['ndatetime'];
        // Calculate 24 hours after the insertion time
        $twentyFourHoursAfterInsert = date('Y-m-d H:i:s', strtotime($insertTime . ' +24 hours'));
        // Get the current time
        $currentTime = date('Y-m-d H:i:s');
        // Compare current time with 24 hours after insert time
        if ($currentTime > $twentyFourHoursAfterInsert) {
            // Delete the notification
            $deleteQuery = "DELETE FROM notification WHERE ndatetime = '$insertTime'";
        }
    }
} else {
    echo "Error fetching notification times: " . mysqli_error($connect);
}
?>
