<?php

    try {
        if (!defined('DevEx')) {
            die('<script>window.location.href="index.php"</script>');
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

    session_start();

    include_once 'controller/website/order.php';
    include_once 'controller/website/userAccount.php';

    try {
            if (isset($_POST['addtocart'])) {
                if (isset($_SESSION['role'])) {
                    $id = $_POST['id'];
                    $image = $_POST['image'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $stock = $_POST['stock'];
                    $qty = $_POST['qty'];
        
                    $add = new order();
        
                    $add->addToCart($id, $image, $name, $price, $stock, $qty);
                }
                else {
                    echo '<script>alert("Please First Login to your account!!! \n\nOR \n\nIf you are new then please create your account!!!");</script>';
                    echo '<script>window.location.href="login.php"</script>';
                }
            }
            if (isset($_POST['checkout'])) {
                if (isset($_SESSION['role'])) {
                    $c_id = $_SESSION['id'];
                    $c_name = $_POST['name'];
                    $p_number = $_POST['phone-number'];
                    $city = $_POST['city'];
                    $p_code = $_POST['post-code'];
                    $c_address = $_POST['address'];
                    $data = new order(); 
                    $total_p = $data->cartCount();
                    $cart_t = $_SESSION['total'];
                    $p_method = $_POST['payment'];
                    $status = "pending";
        
                    $data->confirmOrder($c_id, $c_name, $p_number, $city, $p_code, $c_address, $total_p, $cart_t, $p_method, $status);
                }
                else {
                    echo '<script>alert("Please First Login to your account!!! \n\nOR \n\nIf you are new then please create your account!!!");</script>';
                    echo '<script>window.location.href="login.php"</script>';
                }
            }
        } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Tag  -->
    <title>DevEx | Ecommerce Store</title>

    <!-- StyleSheet -->
	<link href="css/main.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">

    <!-- Fancybox -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
    
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    
    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>