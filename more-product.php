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
            include_once 'more/breadcrumbp.php';
            // <!-- End Breadcrumbs -->

            // <!-- Start Contact -->
            include_once 'more/product.php';
	        // <!--/ End Contact -->

            // <!-- Start Footer Area -->
            include_once 'footer/footer.php';
            // <!-- End Footer Area -->
        ?>
    </body>
</html>
