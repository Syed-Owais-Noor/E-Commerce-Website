<?php

    include_once '../../controller/dashboard/category.php';

    try{
        if (!defined('DevEx')) {
            die('<script>window.location.href="../dashboard.php"</script>');
        }

        if (isset($_POST['addbtn'])) {
            $name = $_POST['name'];
    
            $category = new category();
    
            $category->addCategory($name);
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                    <h4 class="card-title">Please enter your category</h4>

                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name" required>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2" name="addbtn">Add category</button>
                        <a href="category.php" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>