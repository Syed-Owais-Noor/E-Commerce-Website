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
                    <div class="col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">	
                                    <div class="nav-inner">	
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="active"><a href="index.php">Home</a></li>
                                            <li><a href="index.php#product-area">Our Product</a></li>
                                            <li><a href="index.php#trending-item">Trending Product</a></li>
                                            <!-- <li><a href="index.php#on-sales">On Sale</a></li> -->
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