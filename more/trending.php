<?php

    try {
        if (!defined('DevEx')) {
            die('<script>window.location.href="../index.php"</script>');
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<div class="product-area section" id="product-area">
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
                    <div class="product-info">
                        <div class="tab-content" id="myTabContent">
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade show active" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        <?php
                                        
                                            include_once 'controller/website/product.php';

                                            try {
                                                $product = new product();

                                                $product->showProductByTrending2("Yes");
                                            } catch (\Throwable $th) {
                                                echo '<script>alert("Some thing went wrong!!!");</script>';
                                            }

                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Tab -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>