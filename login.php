<?php

    try {
        define('DevEx', true);
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<!DOCTYPE html>
<html lang="zxx">
    <!-- head -->
    <?php include_once 'head.php'; ?>
    <!-- End head -->

    <body class="js">
        <?php
            // <!-- Preloader -->
            // // include_once 'preloader.php';
            // <!-- End Preloader -->

            // <!-- Header -->
            include_once 'header/header2.php';
            // <!-- End Header -->

            // <!-- Breadcrumbs -->
            include_once 'login/breadcrumb.php';
            // <!-- End Breadcrumbs -->

            // <!-- Start Checkout -->
            include_once 'login/loginForm.php';
            // <!--/ End Checkout -->

            // <!-- Start Shop Services Area -->
            include_once 'shopService.php';
            // <!-- End Shop Services Area -->

            // <!-- Start Footer Area -->
            include_once 'footer/footer.php';
            // <!-- End Footer Area -->
        ?>
    </body>
</html>
