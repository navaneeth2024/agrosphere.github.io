<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title> 

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/registration.css">
    <script src="js/validatereg.js"></script>
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="pics/register2.jpeg" alt="">
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <!-- <p>while seats are available !</p> -->
                    </div>
                </div>
                <div class="signup-form"> 
                    <form method="POST" class="register-form" id="register-form" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="name" class="required">Name</label>
                                    <input type="text" name="name" id="name"  onblur='clearError()' onkeypress="nameCheck(event)" placeholder="Enter name" required/>
                                    <p id="namep"></p>
                                </div>
                                <div class="form-input">
                                    <label for="dob" class="required">Date of Birth</label>
                                    <input type="date" name="dob" id="dob"  required/>
                                </div>                
                                <div class="form-input">
                                    <label for="email" >Email</label>
                                    <input type="text" name="email" id="email" oninput="emailCheck()" onblur='clearError()' placeholder="Enter your email" required/>
                                    <p id="emailp"></p>
                                </div>                                
                                <div class="form-input">
                                    <label for="password" class="required">Password</label>
                                    <input type="password" name="password" id="password" oninput="passCheck()" onblur='clearError()' placeholder="Enter a  password between 8-12 characters" required/>
                                    <p id="passp"></p>
                                </div>
                                <div class="form-input">
                                    <label for="city/village" class="required">city/village</label>
                                    <input type="text" name="city/village" id="city/village" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="profpic" >Profile Picture</label>
                                    <input type="file" name="profpic" id="profpic" accept="image/*"  required/>
                                </div>
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="gender">Gender</label>   
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" id="male" value="Male">
                                            <label for="male">Male</label>
                                            <span class="check" ></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" id="female" value="Female">
                                            <label for="female">Female</label>
                                            <span class="check" ></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" id="other" value="Other">
                                            <label for="other">Other</label>
                                            <span class="check" ></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <label for="phone" class="required">Phone number</label>
                                    <input type="text" name="phone_number" id="phone" oninput="phoneCheck()" onkeypress='validateNumbersOnly(event)' onblur='clearError()' placeholder="Enter phone number" required>
                                    <p id="phonep"></p>
                                </div>
                                <div class="form-input">
                                    <label for="cpassword" class="required">Confirm Password</label>
                                    <input type="password" name="cpassword" id="cpassword" oninput="confirmCheck()" required/>
                                    <p id="cpassp"></p>
                                </div>                              
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="district" class="required">district</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="district" id="district" required>
                                            <option value=""> </option>
                                            <option value="Kottayam">Kottayam</option>
                                            <option value="Ernakulam">Ernakulam</option>
                                            <option value="Idukki">Idukki</option>
                                        </select>
                                    </div>                                  
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                            <p>Already have an account?<a href="login.php">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

<?php
include 'components/connect.php';

if (isset($_POST["submit"])) {
    $uname = $_POST["name"];
    $dob = $_POST["dob"];
    $gen = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone_number"];
    $pass = $_POST["password"];
    $place = $_POST["city/village"];
    $dist = $_POST["district"];

    // Handle image upload
    $targetDir = "uploads/";
    $profpic = $_FILES["profpic"]["name"];
    $targetFile = $targetDir . basename($profpic);
    move_uploaded_file($_FILES["profpic"]["tmp_name"], $targetFile);

    // Check if the email or phone number already exists in the database
    $checkQuery = "SELECT * FROM registration WHERE email='$email' OR phone='$phone'";
    $result = mysqli_query($connect, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Account already exists with this email or phone number.')</script>";
    } else {
        $insertQuery = "INSERT INTO registration (name, profilepic, dob, gender, email, phone, password, place, district) VALUES ('$uname', '$profpic', '$dob', '$gen', '$email', '$phone', '$pass', '$place', '$dist')";
        
        if (mysqli_query($connect, $insertQuery)) {
            echo "Successfully inserted";
            echo "<script>window.location.href = 'account-success.html';</script>";
        } else {
            echo "Error: " . mysqli_error($connect);
        }
    }
}
?>
