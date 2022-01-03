<?php

    try {
        if (!defined('DevEx')) {
            die('<script>window.location.href="../index.php"</script>');
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<div class="footer-top section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-12">
                <!-- Single Widget -->
                <div class="single-footer about">
                    <div class="logo">
                        <a href="index.html"><img src="images/logo2.png" alt="#"></a>
                    </div>
                    <p class="text">Have a happy shopping</p>
                    <p class="call">Got Question? Call us 24/7<span><a href="#">Contact Number</a></span></p>
                </div>
                <!-- End Single Widget -->
            </div>
            <div class="col-lg-2 col-md-6 col-12">
                
            </div>
            <div class="col-lg-2 col-md-6 col-12">
                
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Widget -->
                <div class="single-footer social">
                    <h4>Get In Touch</h4>
                    <!-- Single Widget -->
                    <div class="contact">
                        <ul>
                            <li>Store Address</li>
                            <li>Country</li>
                            <li>support@gmail.com</li>
                            <li>Contact Number</li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                    <ul>
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
                <!-- End Single Widget -->
            </div>
        </div>
    </div>
</div>