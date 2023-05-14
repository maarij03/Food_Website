<?php
session_start();
include 'connection.php';

if(isset($_POST['create']))
{
    $name = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $fullname = $name . " " . $lname;
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password =  mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword =  mysqli_real_escape_string($conn, $_POST['confirmpassword']);
    
    if($password == $cpassword)
    {
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $_SESSION['registered'] = false;
        $emcheckquery = "SELECT * from `register` where `user_email` = '$email'";
        $emcheckresult = mysqli_query($conn, $emcheckquery);
        $numofrows = mysqli_num_rows($emcheckresult);
    
        if($numofrows == 0)
        {
            $query = "INSERT INTO `register` (`user_name`,`user_email`,`user_password`) values ('$fullname','$email','$hash')";
            $execute = mysqli_query($conn, $query);
            if($execute)
            {
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $fullname;
                $_SESSION['registered'] = true;
                header('location:login.php');
            }
        }
        else {
            echo "<script>alert('Email already exists');</script>";
        }
    }
    else {
        echo "<script>alert('Password Doesn\'t match');</script>";
    }
}
include 'header.php';
?>


    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="img/bg/9.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  Welcome to our company</h6>
                            <h1 class="section-title white-color">Account</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- LOGIN AREA START (Register) -->
    <div class="ltn__login-area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">Register Your Account</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="account-login-inner">
                        <form action="#" method="post" >
                            <input type="text" name="firstname" placeholder="First Name" require>
                            <input type="text" name="lastname" placeholder="Last Name" require>
                            <input type="email" name="email" placeholder="Email*" require>
                            <input type="password" name="password" placeholder="Password*" require>
                            <input type="password" name="confirmpassword" placeholder="Confirm Password*" require>
                            <div class="btn-wrapper">
                                <button class="theme-btn-1 btn reverse-color btn-block" type="submit" name="create">CREATE ACCOUNT</button>
                            </div>
                        </form>
                        <div class="by-agree text-center mt-3">
                            <p>By creating an account, you agree to our:</p>
                            <p><a href="#">TERMS OF CONDITIONS  &nbsp; &nbsp; | &nbsp; &nbsp;  PRIVACY POLICY</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-create text-center pt-50">
                        <h4>Have an account?</h4>
                        <p>If you have an account please signin.</p>
                        <div class="btn-wrapper">
                            <a href="login.php" class="theme-btn-1 btn black-btn">Sign in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN AREA END -->

<?php
require 'footer.php';
?>