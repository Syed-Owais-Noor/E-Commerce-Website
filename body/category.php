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
                        <h4 class="card-title">Category Section</h4>
                        <a href="category.php?add-category" class="btn btn-info btn-lg btn-block">Add Category</a>
                        <br>

                        <?php
                            try {
                                if(isset($_GET["add-category"]))
                                {
                                    include_once 'addCategory.php';
                                } 
                            } catch (\Throwable $th) {
                                echo '<script>alert("Some thing went wrong!!!");</script>';
                            }                 
                        ?>
                        
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th>CATEGORY</th>
                                        <th colspan="2";>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        include_once '../../controller/dashboard/category.php';

                                        try {
                                            $category = new category();

                                            $category->showCategoryTable();
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