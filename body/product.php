<?php

    try {
        if (!defined('DevEx')) {
            die('<script>window.location.href="../dashboard.php"</script>');
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Product Section</h4>
                        <a href="product.php?add-product" class="btn btn-info btn-lg btn-block"> Add Product</a>
                        <br>

                        <?php
                            try{
                                if(isset($_GET["add-product"]))
                                {
                                    include 'addProduct.php';
                                }
                            } catch (\Throwable $th) {
                                echo '<script>alert("Some thing went wrong!!!");</script>';
                            }                     
                        ?>
                        
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th>PRODUCT</th>
                                        <th>NAME</th>
                                        <th>CATEGORY</th>
                                        <th>PRICE</th>
                                        <th>STOCK</th>
                                        <th>DATE & TIME</th>
                                        <th>TRENDING</th>
                                        <th colspan="2";>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        include_once '../../controller/dashboard/product.php';

                                        try {
                                            $product = new product();

                                            $product->showProductTable();
                                        } catch (\Throwable $th) {
                                            echo '<script>alert("Some thing went wrong!!!");</script>';
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>