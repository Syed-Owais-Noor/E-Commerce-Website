<?php

    try {
        if (!defined('DevEx')) {
            die('<script>window.location.href="../index.php"</script>');
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>