<?php

    include_once '../../database/crudDashboard.php';

    class category{
        public function showCategoryTable(){
            try {
                $selectData = new crudOperation();

                $selectQuery = $selectData->showCategory('category', 'cid');

                while ($row = mysqli_fetch_assoc($selectQuery)) {
                    echo '
                        <tr>
                            <td hidden>'. $row['cid'].'</td>
                            <td>'.$row['name'].'</td>
                            <td><center><a href="editCategory.php?id='.$row['cid'].'" class="icon-eye btn btn-info"></a></center></td>
                            <td><center><a href="removeCategory.php?id='.$row['cid'].'" class="icon-trash btn btn-danger"></a></center></td>
                        </tr>
                    ';
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function editCategory($name, $id){
            try {
                $flag = false;
                $updateData = new crudOperation();

                $selectQuery = $updateData->showCategory('category', 'cid');

                while ($row = mysqli_fetch_assoc($selectQuery)) {
                
                    if ($name != $row['name']) {
                        $flag = true;
                    }
                    else{
                        $flag = false;

                        echo '<script>alert("A category with same name already exist!!!");</script>';

                        break;
                    }
                }

                if ($flag == true && $updateData->updateCategory('category', $name, $id) > 0) {
                    echo '<script>alert("Success, Your category has been edit!!!");</script>';
                    echo '<script>window.location.href="category.php"</script>';
                }
                else {
                    echo '<script>alert("Fail, To edit the category!!!");</script>';
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function addCategory($name){
            try {
                $flag = false;
                $insertData = new crudOperation();

                $selectQuery = $insertData->showCategory('category', 'cid');

                while ($row = mysqli_fetch_assoc($selectQuery)) {
                
                    if ($name != $row['name']) {
                        $flag = true;
                    }
                    else{
                        $flag = false;

                        echo '<script>alert("A category with same name already exist!!!");</script>';

                        break;
                    }
                }

                if ($flag == true && $insertData->insertCategory('category', $name) >= 0) {
                    echo '<script>alert("Success, Your category has been added!!!");</script>';
                    echo '<script>window.location.href="category.php"</script>';
                }
                else {
                    echo '<script>alert("Fail, To add the category!!!");</script>';
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function removeCategory($id){
            try {
                $deleteData = new crudOperation();

                if ($deleteData->deleteCategory('category', $id)) {
                    echo '<script>alert("Success, Category has been removed!!!");</script>';
                    echo '<script>window.location.href="category.php"</script>';
                }
                else {
                    echo '<script>alert("Fail, To remove the category!!!");</script>';
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }
    }

?>