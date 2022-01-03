<?php

    include_once '../../database/crudDashboard.php';
    include_once '../../controller/dashboard/category.php';

    try {
        if (!defined('DevEx')) {
            die('<script>window.location.href="../dashboard.php"</script>');
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
    
            $searchData = new crudOperation();
    
            $selectQuery = $searchData->selectCategoryID($id);
        }
        if (isset($_POST['editbtn'])) {
            $id = $_GET['id'];
            $name = $_POST['name'];

            $category = new category();

            $category->editCategory($name, $id);
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<!-- partial -->
<div class="main-panel">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a type="submit" href="category.php" class="btn btn-info">
                            <i class="icon-rewind menu-icon"></i>
                            <span class="menu-title">Back to category</span>
                        </a>

                        <div class="col-12 grid-margin stretch-card">
                        </div>

                        <h4 class="card-title">Please edit your Category</h4>
            
                        <form class="forms-sample" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>

                                <?php
                                    try {
                                        while($row = mysqli_fetch_array($selectQuery)){
                                            echo '<input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name" value="'.$row['name'].'" required>';
                                        }
                                    } catch (\Throwable $th) {
                                        echo '<script>alert("Some thing went wrong!!!");</script>';
                                    }
                                ?>
                                
                            </div>

                            <button type="submit" class="btn btn-primary mr-2" name="editbtn">Edit category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>