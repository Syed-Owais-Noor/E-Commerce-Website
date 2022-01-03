<?php

    include_once 'database/crudSite.php';

    class product{
        public function showProduct1(){
            try {
                $selectData = new crudOperation();

                $selectQuery = $selectData->showProduct1('product');

                while ($row = mysqli_fetch_assoc($selectQuery)) {
                    if ($row['stock'] != 0) {
                        echo '
                            <form class="col-xl-3 col-lg-4 col-md-4 col-12" method="POST" enctype="multipart/form-data">
                                <div class="single-product">
                                    <div class="product-img">
                                        <input name="id" value="'.$row['pid'].'" hidden>
                                        <button type="submit" name="addtocart" style="margin-top: 0%; background-color:transparent; padding:0%; border: none;">
                                            <a href="#">
                                                <input name="image" value="'.$row['image'].'" hidden>
                                                <img class="default-img" src="images/product/'.$row["image"].'?>" alt="Product Image">
                                                <!-- <img class="hover-img" src="images/product/p2.jpg" alt="Product Image"> -->
                                            </a>
                                        </button>
                                        <div class="button-head">
                                            <div class="product-action-2">
                                                <button type="submit" name="addtocart" style="padding-left: 12px; background-color:transparent; border: none;" title="Add to cart">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <input name="name" value="'.$row['pname'].'" hidden>
                                        <h3><a href="#">'.$row["pname"].'</a></h3>
                                        <input name="price" value="'.$row['price'].'" hidden>
                                        <div class="product-price">
                                            <span>Rs. '.$row["price"].'</span>
                                        </div>
                                        <input name="stock" value="'.$row['stock'].'" hidden>
                                        <div class="product-stock">
                                            <span>Stock: '.$row["stock"].'</span>
                                        </div>
                                        <div class="product-stock">
                                            <span>Quantity: <input type="number" name="qty" class="input-number" data-min="1" data-max="'.$row["stock"].'" value="1" style="text-align: center;"></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        ';
                    }
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function showProduct2(){
            try {
                $selectData = new crudOperation();

                $selectQuery = $selectData->showProduct2('product', 'pid');

                while ($row = mysqli_fetch_assoc($selectQuery)) {
                    if ($row['stock'] != 0) {
                        echo '
                            <form class="col-xl-3 col-lg-4 col-md-4 col-12" method="POST" enctype="multipart/form-data">
                                <div class="single-product">
                                    <div class="product-img">
                                        <input name="id" value="'.$row['pid'].'" hidden>
                                        <button type="submit" name="addtocart" style="margin-top: 0%; background-color:transparent; padding:0%; border: none;">
                                            <a href="#">
                                                <input name="image" value="'.$row['image'].'" hidden>
                                                <img class="default-img" src="images/product/'.$row["image"].'?>" alt="Product Image">
                                                <!-- <img class="hover-img" src="images/product/p2.jpg" alt="Product Image"> -->
                                            </a>
                                        </button>
                                        <div class="button-head">
                                            <div class="product-action-2">
                                                <button type="submit" name="addtocart" style="padding-left: 12px; background-color:transparent; border: none;" title="Add to cart">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <input name="name" value="'.$row['pname'].'" hidden>
                                        <h3><a href="#">'.$row["pname"].'</a></h3>
                                        <input name="price" value="'.$row['price'].'" hidden>
                                        <div class="product-price">
                                            <span>Rs. '.$row["price"].'</span>
                                        </div>
                                        <input name="stock" value="'.$row['stock'].'" hidden>
                                        <div class="product-stock">
                                            <span>Stock: '.$row["stock"].'</span>
                                        </div>
                                        <div class="product-stock">
                                            <span>Quantity: <input type="number" name="qty" class="input-number" data-min="1" data-max="'.$row["stock"].'" value="1" style="text-align: center;"></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        ';
                    }
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function showProductByCategory($category){
            try {
                $selectData = new crudOperation();

                $selectQuery = $selectData->selectProductByCategory('product', $category);

                while ($row = mysqli_fetch_assoc($selectQuery)) {
                    if ($row['stock'] != 0) {
                        echo '
                            <form class="col-xl-3 col-lg-4 col-md-4 col-12" method="POST" enctype="multipart/form-data">
                                <div class="single-product">
                                    <div class="product-img">
                                        <input name="id" value="'.$row['pid'].'" hidden>
                                        <button type="submit" name="addtocart" style="margin-top: 0%; background-color:transparent; padding:0%; border: none;">
                                            <a href="#">
                                                <input name="image" value="'.$row['image'].'" hidden>
                                                <img class="default-img" src="images/product/'.$row["image"].'?>" alt="Product Image">
                                                <!-- <img class="hover-img" src="images/product/p2.jpg" alt="Product Image"> -->
                                            </a>
                                        </button>
                                        <div class="button-head">
                                            <div class="product-action-2">
                                                <button type="submit" name="addtocart" style="padding-left: 12px; background-color:transparent; border: none;" title="Add to cart">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <input name="name" value="'.$row['pname'].'" hidden>
                                        <h3><a href="#">'.$row["pname"].'</a></h3>
                                        <input name="price" value="'.$row['price'].'" hidden>
                                        <div class="product-price">
                                            <span>Rs. '.$row["price"].'</span>
                                        </div>
                                        <input name="stock" value="'.$row['stock'].'" hidden>
                                        <div class="product-stock">
                                            <span>Stock: '.$row["stock"].'</span>
                                        </div>
                                        <div class="product-stock">
                                            <span>Quantity: <input type="number" name="qty" class="input-number" data-min="1" data-max="'.$row["stock"].'" value="1" style="text-align: center;"></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        ';
                    }
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function showProductByTrending1($trending){
            try {
                $selectData = new crudOperation();

                $selectQuery = $selectData->selectProductByTrending1('product', $trending);

                while ($row = mysqli_fetch_assoc($selectQuery)) {
                    if ($row['stock'] != 0) {
                        echo '
                            <form class="single-product" method="POST" enctype="multipart/form-data">
                                <div class="product-img">
                                    <input name="id" value="'.$row['pid'].'" hidden>
                                    <button type="submit" name="addtocart" style="margin-top: 0%; background-color:transparent; padding:0%; border: none;">
                                        <a href="#">
                                            <input name="image" value="'.$row['image'].'" hidden>
                                            <img class="default-img" src="images/product/'.$row["image"].'?>" alt="Product Image">
                                            <!-- <img class="hover-img" src="images/product/p2.jpg" alt="Product Image"> -->
                                        </a>
                                    </button>
                                    <div class="button-head">
                                        <div class="product-action-2">
                                            <button type="submit" name="addtocart" style="padding-left: 12px; background-color:transparent; border: none;" title="Add to cart">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <input name="name" value="'.$row['pname'].'" hidden>
                                    <h3><a href="#">'.$row["pname"].'</a></h3>
                                    <input name="price" value="'.$row['price'].'" hidden>
                                    <div class="product-price">
                                        <span>Rs. '.$row["price"].'</span>
                                    </div>
                                    <input name="stock" value="'.$row['stock'].'" hidden>
                                    <div class="product-stock">
                                        <span>Stock: '.$row["stock"].'</span>
                                    </div>
                                    <div class="product-stock">
                                        <span>Quantity: <input type="number" name="qty" class="input-number" data-min="1" data-max="'.$row["stock"].'" value="1" style="text-align: center;"></span>
                                    </div>
                                    <div class="product-stock">
                                        <span><input type="number" class="input-number" style="border: none;" readonly></span>
                                    </div>
                                </div>
                            </form>
                        ';
                    }
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function showProductByTrending2($trending){
            try {
                $selectData = new crudOperation();

                $selectQuery = $selectData->selectProductByTrending2('product', $trending);

                while ($row = mysqli_fetch_assoc($selectQuery)) {
                    if ($row['stock'] != 0) {
                        echo '
                            <form class="col-xl-3 col-lg-4 col-md-4 col-12" method="POST" enctype="multipart/form-data">
                                <div class="single-product">
                                    <div class="product-img">
                                        <input name="id" value="'.$row['pid'].'" hidden>
                                        <button type="submit" name="addtocart" style="margin-top: 0%; background-color:transparent; padding:0%; border: none;">
                                            <a href="#">
                                                <input name="image" value="'.$row['image'].'" hidden>
                                                <img class="default-img" src="images/product/'.$row["image"].'?>" alt="Product Image">
                                                <!-- <img class="hover-img" src="images/product/p2.jpg" alt="Product Image"> -->
                                            </a>
                                        </button>
                                        <div class="button-head">
                                            <div class="product-action-2">
                                                <button type="submit" name="addtocart" style="padding-left: 12px; background-color:transparent; border: none;" title="Add to cart">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <input name="name" value="'.$row['pname'].'" hidden>
                                        <h3><a href="#">'.$row["pname"].'</a></h3>
                                        <input name="price" value="'.$row['price'].'" hidden>
                                        <div class="product-price">
                                            <span>Rs. '.$row["price"].'</span>
                                        </div>
                                        <input name="stock" value="'.$row['stock'].'" hidden>
                                        <div class="product-stock">
                                            <span>Stock: '.$row["stock"].'</span>
                                        </div>
                                        <div class="product-stock">
                                            <span>Quantity: <input type="number" name="qty" class="input-number" data-min="1" data-max="'.$row["stock"].'" value="1" style="text-align: center;"></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        ';
                    }
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }
    }

?>