<?php

    try {
        if (!defined('DevEx')) {
            die('<script>window.location.href="../index.php"</script>');
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<footer class="footer">
    <!-- Footer Top -->
    <?php include 'footerTop.php'; ?>
    <!-- End Footer Top -->

    <div class="copyright">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="left">
                            <p>Copyright © 2020 <a href="#" target="_blank">DevEx</a>  -  All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /End Footer Area -->

<!-- Jquery -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>
<script src="js/jquery-ui.min.js"></script>

<!-- Popper JS -->
<script src="js/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>

<!-- Color JS -->
<script src="js/colors.js"></script>

<!-- Slicknav JS -->
<script src="js/slicknav.min.js"></script>

<!-- Owl Carousel JS -->
<script src="js/owl-carousel.js"></script>

<!-- Magnific Popup JS -->
<script src="js/magnific-popup.js"></script>

<!-- Waypoints JS -->
<script src="js/waypoints.min.js"></script>

<!-- Countdown JS -->
<script src="js/finalcountdown.min.js"></script>

<!-- Nice Select JS -->
<script src="js/nicesellect.js"></script>

<!-- Flex Slider JS -->
<script src="js/flex-slider.js"></script>

<!-- ScrollUp JS -->
<script src="js/scrollup.js"></script>

<!-- Onepage Nav JS -->
<script src="js/onepage-nav.min.js"></script>

<!-- Easing JS -->
<script src="js/easing.js"></script>

<!-- Active JS -->
<script src="js/active.js"></script>

<!-- Window reload form resolve -->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href);
    }
</script>