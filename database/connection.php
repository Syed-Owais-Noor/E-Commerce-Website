<?php

    class connection{
        public function connect(){
            try{
                $connect = mysqli_connect("localhost","root","","ecommerce");
                return $connect;
            }
            catch (PDOException $f){
                    echo $f->getmessage();
            }
        }
    }

?>