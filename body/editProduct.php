<?php

    include_once '../../database/crudDashboard.php';
    include_once '../../controller/dashboard/product.php';

    try {
        if (!defined('DevEx')) {
            die('<script>window.location.href="../dashboard.php"</script>');
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
    
            $searchData = new crudOperation();
    
            $selectQuery = $searchData->selectProductID($id);
        }
        if (isset($_POST['editbtn'])) {
            $id = $_GET['id'];
            $price = $_POST['price'];
            $stock = $_POST['stock'];
            $trending = $_POST['trending'];
            $filename = $_FILES['image']['name'];
            $temp_name = $_FILES['image']['tmp_name'];
            $folder = "../../images/product/".$filename;

            $product = new product();

            $product->editProduct($id, $price, $stock, $filename, $trending, $temp_name, $folder);
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
                        <a type="submit" href="product.php" class="btn btn-info">
                            <i class="icon-rewind menu-icon"></i>
                            <span class="menu-title">Back to product</span>
                        </a>

                        <div class="col-12 grid-margin stretch-card">
                        </div>

                        <h4 class="card-title">Please edit your Product</h4>
            
                        <form class="forms-sample" method="POST" enctype="multipart/form-data">
                            <?php
                                try {
                                    while($row = mysqli_fetch_array($selectQuery)){
                            ?>
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name" value="<?php echo $row['pname'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Category</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name" value="<?php echo $row['category'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Price</label>
                                    <input type="number" class="form-control" id="exampleInputCity1" name="price" placeholder="Price" value="<?php echo $row['price']?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Stock</label>
                                    <input type="number" class="form-control" id="exampleInputPassword4" name ="stock" placeholder="Stock" value="<?php echo $row['stock']?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Trending Product</label>
                                    <select class="form-control" id="exampleInputName1" name="trending">
                                        <option><?php echo $row['trending']?></option>
                                        <?php
                                        
                                            if ($row['trending'] == "No") { ?>
                                                <option>Yes</option>
                                            <?php }
                                            else { ?>
                                                <option>No</option>
                                            <?php }

                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Upload image</label>
                                    <input type="file" name="image">
                                    <br><br>
                                    <img src="../../images/product/<?php echo $row['image']?>" alt="Product Image" style="width: 15%; height: 15%">
                                </div>
                            <?php
                                    }
                                } catch (\Throwable $th) {
                                    echo '<script>alert("Some thing went wrong!!!");</script>';
                                }
                            ?>

                            <button type="submit" class="btn btn-primary mr-2" name="editbtn">Edit product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>