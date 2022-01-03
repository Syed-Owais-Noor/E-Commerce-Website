<?php

    try {
        if (!defined('DevEx')) {
            die('<script>window.location.href="../index.php"</script>');
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<div class="product-area most-popular section" id="trending-item">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Trending Product</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    <!-- Start Single Product -->
                    <?php
                                        
                        include_once 'controller/website/product.php';

                        try {
                            $product = new product();

                            $product->showProductByTrending1("Yes");
                        } catch (\Throwable $th) {
                            echo '<script>alert("Some thing went wrong!!!");</script>';
                        }

                    ?>
                    <!-- End Single Product -->
                </div>

                <div class="single-product">
                </div>

                <div class="single-widget get-button">
                    <div class="content">
                        <center>
                            <div class="button">
                                <a href="more-trending-product.php" class="btn" style="color: #fff;">More Trending Product's</a>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>