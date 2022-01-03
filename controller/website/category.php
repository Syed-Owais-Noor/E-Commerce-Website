<?php

    include_once 'database/crudSite.php';

    class category{
        public function showCategoryList(){
            try {
                $selectData = new crudOperation();

                $selectQuery = $selectData->showCategory('category', 'cid');

                while ($row = mysqli_fetch_assoc($selectQuery)) {
                    echo '<li><a href="more-category-product.php?category='.$row['name'].'">'.$row['name'].'</a></li>';
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }
    }

?>