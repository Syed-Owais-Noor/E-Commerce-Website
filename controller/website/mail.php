<?php

    class mail{
        public function sendMail($subject, $message){
            try {
                $message = wordwrap($message, 70);

                mail("owaisnoorsyef@gmail.com", $subject, $message);
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }
    }

?>