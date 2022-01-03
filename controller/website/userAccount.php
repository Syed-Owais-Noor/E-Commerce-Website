<?php

    include_once 'database/crudSite.php';

    class user{
        private $userid = "";
        private $email = "";
        private $role = "";

        public function setID($id){
            try {
                $this->userid = $id;
                $_SESSION['id'] = $this->userid;
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function setEmail($email){
            try {
                $this->email = $email;
                $_SESSION['email'] = $this->email;
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function setRole($role){
            try {
                $this->role = $role;
                $_SESSION['role'] = $this->role;
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }
    }

    class login extends user{
        function checkValidation($email, $password){
            try {
                $flag = true;
                $selectData = new crudOperation();
            
                if ($email == "" && $password == "") {
                    echo '<script>alert("You forget to enter your name or password!!!");</script>';
                }
                else{
                    $selectQuery = $selectData->selectUser('user', 'uid');

                    while ($row = mysqli_fetch_assoc($selectQuery)) {
                    
                        if ($email == $row['email'] && $password == $row['password']) {
                            if ($row['role'] == "admin") {
                                $flag = false;

                                $this->setID($row['uid']);
                                $this->setEmail($row['email']);
                                $this->setRole($row['role']);

                                echo '<script>alert("Welcome Admin, Let start our day!!!");</script>';
                                echo '<script>window.location.href="dashboard/admin/dashboard.php"</script>';

                                break;
                            }
                            else {
                                $flag = false;

                                $this->setID($row['uid']);
                                $this->setEmail($row['email']);
                                $this->setRole($row['role']);

                                echo '<script>alert("Welcome Customer, What you like to buy from our site???");</script>';
                                echo '<script>window.location.href="dashboard/customer/dashboard.php?customer='.$_SESSION['id'].'"</script>';

                                break;
                            }
                        }
                        else {
                            $flag = true;
                        }
                    }

                    if ($flag == true) {
                        echo '<script>alert("Either you have enter wrong name or password!!!");</script>';
                    }
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }
    }

    class signup extends login{
        function checkValidation($email, $password){
            try {
                $flag = false;
                $insertData = new crudOperation();

                if ($email == "" && $password == "") {
                    $flag = false;

                    echo '<script>alert("You forget to enter your name or password!!!");</script>';
                }
                else{
                    $selectQuery = $insertData->selectUser('user', 'uid');

                    while ($row = mysqli_fetch_assoc($selectQuery)) {
                    
                        if (strlen($password) > 8 && $email != $row['email']) {
                            $flag = true;
                        }
                        else{
                            $flag = false;

                            echo '<script>alert("An account with this email is already been register OR you have not enter a 8 character password!!!");</script>';
                            break;
                        }
                    }

                    if ($flag == true && $insertData->insertUser('user', $email, $password, 'customer') >= 0) {

                        $selectQuery = $insertData->selectUserID('user', $email, $password);
                        
                        while ($row = mysqli_fetch_assoc($selectQuery)) {
                            $this->setID($row['uid']);
                        }

                        $this->setEmail($email);
                        $this->setRole("customer");

                        echo '<script>alert("Thanks You, For joining our plateform have a happy shopping!!!");</script>';
                        echo '<script>window.location.href="dashboard/customer/dashboard.php?customer='.$_SESSION['id'].'"</script>';
                    }
                    else {
                        echo '<script>alert("Sorry, Your account is not created Please try again!!!");</script>';
                    }
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }
    }

?>