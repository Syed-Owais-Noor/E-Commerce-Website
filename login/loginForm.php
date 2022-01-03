<?php

    include_once 'controller/website/userAccount.php';

    try {
        if (!defined('DevEx')) {
            die('<script>window.location.href="../index.php"</script>');
        }

        if (isset($_POST['loginbtn'])) {
            $email = $_POST['loginEmail'];
            $password = $_POST['loginPassword'];

            $login = new login();

            $login->checkValidation($email, $password);
        }
        elseif (isset($_POST['signupbtn'])) {
            $email = $_POST['signupEmail'];
            $password = $_POST['signupPassword'];

            $signup = new signup();

            $signup->checkValidation($email, $password);
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<div class="product-area section">
    <div class="container col-xs-4">
        <div class="row">
            <div class="col-5">
                <div class="login-form">
                    <h2>Login to your account</h2>
                    <form method="POST" enctype="multipart/form-data">
                        <input type="email" placeholder="Email Address" name="loginEmail" tabindex="1">
                        <input type="password" placeholder="Password" name="loginPassword" tabindex="2">
                        <div class="single-widget get-button">
                            <div class="content">
                                <div class="button">
                                <button type="submit" name="loginbtn" style="margin-top: 0%; background-color:transparent; padding:0%;"><a class="btn btn-default" tabindex="3">Login</a></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-5">
                <div class="signup-form">
                    <h2>New User Signup!</h2>
                    <form method="POST" enctype="multipart/form-data">
                        <input type="email" placeholder="Email Address" name="signupEmail" tabindex="5">
                        <input type="password" placeholder="Password 8 character" name="signupPassword" tabindex="6">
                        <div class="single-widget get-button">
                            <div class="content">
                                <div class="button" style="color: #fff;">
                                <button type="submit" name="signupbtn" style="margin-top: 0%; background-color:transparent; padding:0%;"><a class="btn btn-default" tabindex="7">Sign Up</a></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>