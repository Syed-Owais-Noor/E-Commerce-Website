<?php
    
    include_once '../../database/crudDashboard.php';

    class product{
        public function showProductTable(){
            try {
                $selectData = new crudOperation();

                $selectQuery = $selectData->showProduct('product', 'pid');

                while ($row = mysqli_fetch_assoc($selectQuery)) {
                    echo '
                        <tr>
                            <td hidden>'.$row ['pid'].'</td>
                            <td><img src="../../images/product/'.$row['image'].'" alt="Product Image" style="width: 100%; height: 100%"></td>
                            <td>'.$row ['pname'].'</td>
                            <td>'.$row ['category'].'</td>
                            <td>'.$row ['price'].'</td>
                            <td>'.$row ['stock'].'</td>
                            <td>'.$row ['date'].'</td>
                            <td>'.$row ['trending'].'</td>
                            <td><a href="editProduct.php?id='.$row['pid'].'"class="icon-eye btn btn-info"></a></td>
                            <td><a href="removeProduct.php?id='.$row['pid'].'" class="icon-trash btn btn-danger"></a></td>
                        </tr>
                    ';
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function editProduct($id, $price, $stock, $image, $trending, $temp_name, $folder){
            try {
                $updateData = new crudOperation();

                if ($image != "") {
                    if ($updateData->updateProduct1('product', $id, $price, $stock, $image, $trending) > 0) {
                        if (move_uploaded_file($temp_name, $folder))  {
                            echo '<script>alert("Success, Your product has been edit!!!");</script>';
                            echo '<script>window.location.href="product.php"</script>';
                        }else{
                            echo '<script>alert("Can not upload the image!!!");</script>';
                        }
                    }
                    else {
                        echo '<script>alert("Fail, To edit the product!!!");</script>';
                    }
                }
                else {
                    if ($updateData->updateProduct2('product', $id, $price, $stock, $trending) > 0) {
                        echo '<script>alert("Success, Your product has been edit!!!");</script>';
                        echo '<script>window.location.href="product.php"</script>';
                    }
                    else {
                        echo '<script>alert("Fail, To edit the product!!!");</script>';
                    }
                }
                
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function addProduct($name, $category, $price, $stock, $image, $trending, $temp_name, $folder){
            try {
                $flag = false;
                $insertData = new crudOperation();

                $selectQuery = $insertData->showProduct('product', 'pid');

                while ($row = mysqli_fetch_assoc($selectQuery)) {
                
                    if ($name != $row['pname'] && $image != $row['image']) {
                        $flag = true;
                    }
                    else{
                        $flag = false;

                        echo '<script>alert("A product with same name and price already exist!!!");</script>';

                        break;
                    }
                }

                if ($flag == true && $insertData->insertProduct('product', $name, $category, $price, $stock, $image, $trending) >= 0) {
                    if (move_uploaded_file($temp_name, $folder))  {
                        echo '<script>alert("Success, Your product has been added!!!");</script>';
                        echo '<script>window.location.href="product.php"</script>';
                    }else{
                        echo '<script>alert("Can not upload the image!!!");</script>';
                    }
                }
                else {
                    echo '<script>alert("Fail, To add the product!!!");</script>';
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function removeProduct($id){
            try {
                $deleteData = new crudOperation();

                if ($deleteData->deleteProduct('product', $id)) {
                    echo '<script>alert("Success, Product has been removed!!!");</script>';
                    echo '<script>window.location.href="product.php"</script>';
                }
                else {
                    echo '<script>alert("Fail, To remove the product!!!");</script>';
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }
    }

?>