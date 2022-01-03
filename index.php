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

            try {
                if (isset($_SESSION['role'])) {
                    # code...
                }
                else {
                    // <!-- Preloader -->
                    include_once 'preloader.php';
                    // <!-- End Preloader -->
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }

            // <!-- Header -->
            include_once 'header/header1.php';
            // <!-- End Header -->

            // <!-- Slider Area -->
            include_once 'slider/sliderArea.php';
            // <!-- End Slider Area -->

            
            // <!-- Start Small Banner  -->
            include_once 'banner/banner.php';
            // <!-- End Small Banner -->

            // <!-- Start Product Area -->
            include_once 'product/productArea.php';
            // <!-- End Product Area -->

            // <!-- Start Midium Banner  -->
            // // include_once 'banner/midBanner.php';
            // <!-- End Midium Banner -->

            // <!-- Start Shop Services Area -->
            include_once 'shopService.php';
            // <!-- End Shop Services Area -->

            // <!-- Start Most Popular -->
            include_once 'product/trendingArea.php';
            // <!-- End Most Popular Area -->

            // <!-- Start On Sale  -->
            // // include_once 'product/onSale.php';
            // <!-- End On Sale  -->

            // <!-- Start Footer Area -->
            include_once 'footer/footer.php';
            // <!-- End Footer Area -->
        ?>
    </body>
</html>
