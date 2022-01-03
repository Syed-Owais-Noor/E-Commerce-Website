<?php

    try {
        if (!defined('DevEx')) {
            die('<script>window.location.href="../index.php"</script>');
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-12">
                <!-- Top Left -->
                <div class="top-left">
                    <ul class="list-main">
                        <li><i class="ti-headphone-alt"></i> Contact Number </li>
                        <li><i class="ti-email"></i> support@gmail.com </li>
                    </ul>
                </div>
                <!--/ End Top Left -->
            </div>
            <div class="col-lg-7 col-md-12 col-12">
                <!-- Top Right -->
                <div class="right-content">
                    <ul class="list-main">
                        <li><i class="ti-location-pin"></i> Store Address </li>
                        <li><i class="ti-alarm-clock"></i> <a href="#">In 24 hours</a></li>
                        <li><i class="ti-power-off"></i><a href="login.php">Login</a></li>
                    </ul>
                </div>
                <!-- End Top Right -->
            </div>
        </div>
    </div>
</div>