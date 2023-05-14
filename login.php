<?php
session_start();
include 'connection.php';

if(isset($_POST['signin']))
{
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password =  mysqli_real_escape_string($conn,$_POST['password']);

    $checkemail = "SELECT * FROM `register` where `user_email` = '$email'";
    $exe = mysqli_query($conn,$checkemail);
    $numofrows = mysqli_num_rows($exe);
    $_SESSION['login'] = false;
    $_SESSION['logout'] = false;
    if($numofrows == 1)
    {
        $row = mysqli_fetch_assoc($exe);
        if(password_verify($password,$row['user_password']))
        {
            $_SESSION['login'] = true;
            $_SESSION['registered'] = true;
            $_SESSION['user_email'] = $row['user_email'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['name'] = $row['user_name']; 
            header('location:index.php');
        }
        else
        {
            echo "<script>alert('Invalid password');</script>";
        }
    }
    else
        {
            echo "<script>alert('Invalid Email');</script>";
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
                                <li>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- LOGIN AREA START -->
    <div class="ltn__login-area pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">Sign In To  Your Account</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3">
                </div>
                <div class="col-lg-6">
                    <div class="account-login-inner">
                        <form action="#" method="post">
                            <input type="text" name="email" placeholder="Email*">
                            <input type="password" name="password" placeholder="Password*">
                            <div class="btn-wrapper mt-0">
                                <button class="theme-btn-1 btn btn-block" type="submit" name="signin">SIGN IN</button>
                            </div>
                            <div class="go-to-btn mt-20">
                                <a href="forgotpass.php"><small>FORGOTTEN YOUR PASSWORD?</small></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="offset-md-3">

                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN AREA END -->

<?php
require 'footer.php';
?>