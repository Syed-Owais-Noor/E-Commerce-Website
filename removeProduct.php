<?php

    session_start();

    try {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            foreach ($_SESSION['cart'] as $key => $value) {
                if ($key == $id) {
                    unset($_SESSION['cart'][$key]);
                    echo '<script>alert("Success, Product has been removed!!!");</script>';
                    echo '<script>window.location.href="cart.php"</script>';
                }   
            }
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>