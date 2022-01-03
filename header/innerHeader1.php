<?php

    try {
        if (!defined('DevEx')) {
            die('<script>window.location.href="../index.php"</script>');
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<div class="header-inner">
    <div class="container">
        <div class="cat-nav-head">
            <div class="row">
                <div class="col-lg-3">
                    <div class="all-category">
                        <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                        <ul class="main-category">
                            <?php
                                include_once 'controller/website/category.php';

                                try {
                                    $category = new category();

                                    $category->showCategoryList();
                                } catch (\Throwable $th) {
                                    echo '<script>alert("Some thing went wrong!!!");</script>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="menu-area">
                        <!-- Main Menu -->
                        <nav class="navbar navbar-expand-lg">
                            <div class="navbar-collapse">	
                                <div class="nav-inner">	
                                    <ul class="nav main-menu menu navbar-nav">
                                        <li><a href="#product-area">Our Product</a></li>
                                        <li><a href="#trending-item">Trending Product</a></li>
                                        <!-- <li><a href="#on-sales">On Sale</a></li> -->
                                        <!-- <li><a href="contact.php">Contact Us</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!--/ End Main Menu -->	
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>