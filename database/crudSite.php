<?php

    include_once 'database/connection.php';

    class crudOperation{
        private function getDB(){
            try {
                $db = new connection();
                return $db;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to connect with database!!!");</script>';
            }
        }

        public function selectUser($table, $short){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select * from $table order by $short");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function selectUserID($table, $email, $password){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select uid from $table where email='$email' and password='$password'");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function insertUser($table, $email, $password, $role){
            try {
                $insertQuery = mysqli_query($this->getDB()->connect(),"insert into $table (email,password,role) values ('$email','$password','$role')");
                
                return $insertQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
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

        public function showProduct1($table){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select * from $table where stock > 0 order by RAND() limit 4");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function showProduct2($table, $short){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select * from $table order by pid='$short'");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function selectProductByCategory($table, $category){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select * from $table where category='$category'");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function selectProductByTrending1($table, $trending){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select * from $table where trending='$trending' order by RAND() limit 4");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function selectProductByTrending2($table, $trending){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select * from $table where trending='$trending'");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function selectOrderID($table, $p_number){
            try {
                $selectQuery = mysqli_query($this->getDB()->connect(), "select o_id from $table where p_number='$p_number'");

                return $selectQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function insertCustomerDetail($table, $c_id, $c_name, $p_number, $city, $p_code, $c_address, $total_p, $cart_t, $p_method, $status){
            try {
                $insertQuery = mysqli_query($this->getDB()->connect(),"insert into $table (c_id,c_name,p_number,city,p_code,c_address,total_p,cart_t,p_method,status) values ('$c_id','$c_name','$p_number','$city','$p_code','$c_address','$total_p','$cart_t','$p_method','$status')");
                
                return $insertQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function insertOrder($table, $o_id, $p_name, $price, $qty, $total, $image){
            try {
                $insertQuery = mysqli_query($this->getDB()->connect(),"insert into $table (o_id,p_name,price,qty,total,image) values ('$o_id','$p_name','$price','$qty','$total','$image')");
                
                return $insertQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }

        public function updateStock($table, $id, $stock){
            try {
                $updateQuery = mysqli_query($this->getDB()->connect(), "update $table set  stock='$stock' where pid='$id'");

                return $updateQuery;
            } catch (\Throwable $th) {
                echo '<script>alert("Fail to execute the query!!!");</script>';
            }
        }
    }

?>