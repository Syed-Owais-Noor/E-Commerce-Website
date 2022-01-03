<?php

    try {
        session_start();

        if ($_SESSION['role'] != "admin" || $_SESSION['role'] != "customer")
        {
            session_destroy();
            header('location:index.php');
        }

        session_destroy();
        header("Location: index.php");
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }
?>