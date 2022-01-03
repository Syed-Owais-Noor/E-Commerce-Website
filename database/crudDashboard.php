<?php

    include_once '../../database/connection.php';

    class crudOperation{
        private function getDB(){
            try {
                $db = new connection();
                return $db;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to connect with database!!!");</script>';
            }
        }

        public function showCategory($table, $short){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select * from $table order by cid='$short'");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function selectCategoryID($id){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select * from `category` where cid='$id'");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function insertCategory($table, $name){
            try {
                $insertQuery = mysqli_query($this->getDB()->connect(),"insert into $table (name) values ('$name')");

                return $insertQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function updateCategory($table, $name, $id){
            try {
                $updateQuery = mysqli_query($this->getDB()->connect(), "update $table set  name='$name' where cid='$id'");

                return $updateQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function deleteCategory($table, $id){
            try {
                $deleteQuery = mysqli_query($this->getDB()->connect(), "delete from $table where cid='$id'");

                return $deleteQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function showProduct($table, $short){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select * from $table order by pid='$short'");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function selectProductID($id){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select * from `product` where pid='$id'");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function insertProduct($table, $name, $category, $price, $stock, $image, $trending){
            try {
                $insertQuery = mysqli_query($this->getDB()->connect(),"insert into $table (pname, category, price, stock, image, trending) values ('$name', '$category', '$price', '$stock', '$image', '$trending')");

                return $insertQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function updateProduct1($table, $id, $price, $stock, $image, $trending){
            try {
                $updateQuery = mysqli_query($this->getDB()->connect(), "update $table set  price='$price', stock='$stock', image='$image', trending='$trending' where pid='$id'");

                return $updateQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function updateProduct2($table, $id, $price, $stock, $trending){
            try {
                $updateQuery = mysqli_query($this->getDB()->connect(), "update $table set  price='$price', stock='$stock', trending='$trending' where pid='$id'");

                return $updateQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function deleteProduct($table, $id){
            try {
                $deleteQuery = mysqli_query($this->getDB()->connect(), "delete from $table where pid='$id'");

                return $deleteQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function showOrder1($table){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select * from $table order by RAND() limit 12");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function showOrder2($table, $short){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select * from $table order by o_id='$short'");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function showOrder3($table, $id){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select * from $table where c_id='$id'");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function updateStatus($table, $id, $status){
            try {
                $updateQuery = mysqli_query($this->getDB()->connect(), "update $table set  status='$status' where o_id='$id'");

                return $updateQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function deleteOrderDetail($table, $id){
            try {
                $deleteQuery = mysqli_query($this->getDB()->connect(), "delete from $table where o_id='$id'");

                return $deleteQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function deleteOrder($table, $id){
            try {
                $deleteQuery = mysqli_query($this->getDB()->connect(), "delete from $table where o_id='$id'");

                return $deleteQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function selectOrderDetail($table, $id){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select * from $table where o_id='$id'");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function selectOrder($table, $id){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select * from $table where o_id='$id'");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }
    }

?>