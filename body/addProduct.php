<?php

    include_once '../../controller/dashboard/product.php';
    include_once '../../database/crudDashboard.php';

    try{
        if (!defined('DevEx')) {
            die('<script>window.location.href="../dashboard.php"</script>');
        }

        $searchData = new crudOperation();
    
        $selectCategory = $searchData->showCategory('category', 'cid');

        if (isset($_POST['addbtn'])) {
            $name = $_POST['name'];
            $category = $_POST['category'];
            $price = $_POST['price'];
            $stock = $_POST['stock'];
            $trending = $_POST['trending'];
            $filename = $_FILES['image']['name'];
            $temp_name = $_FILES['image']['tmp_name'];
            $folder = "../../images/product/".$filename;

            $product = new product();
    
            $product->addProduct($name, $category, $price, $stock, $filename, $trending, $temp_name, $folder);
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Please enter details of product</h4>
                
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Category</label>
                        <select class="form-control" id="exampleInputName1" name="category" required>

                            <?php
                            
                                try {
                                    while($data = mysqli_fetch_array($selectCategory)){
                                        echo '<option>'.$data['name'].'</option>';
                                    }
                                } catch (\Throwable $th) {
                                    echo '<script>alert("Some thing went wrong!!!");</script>';
                                }

                            ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Price</label>
                        <input type="number" class="form-control" id="exampleInputCity1" name="price" placeholder="Price" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Stock</label>
                        <input type="number" class="form-control" id="exampleInputPassword4" name ="stock" placeholder="Stock" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Trending Product</label>
                        <select class="form-control" id="exampleInputName1" name="trending" required>
                            <option>Select</option>
                            <option>-----------------------------</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Upload image</label>
                        <input type="file" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="addbtn">Add product</button>
                    <a class="btn btn-light" href="product.php">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>