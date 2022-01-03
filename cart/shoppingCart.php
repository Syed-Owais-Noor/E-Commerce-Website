<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Shopping Summery -->
                <table class="table shopping-summery">
                    <thead>
                        <tr class="main-hading">
                            <th>PRODUCT</th>
                            <th>NAME</th>
                            <th class="text-center">UNIT PRICE</th>
                            <th class="text-center">QUANTITY</th>
                            <th class="text-center">TOTAL</th> 
                            <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            include_once 'controller/website/order.php';

                            try {
                                $order = new order();

                                $order->showCart();
                            } catch (\Throwable $th) {
                                echo '<script>alert("Some thing went wrong!!!");</script>';
                            }
                        
                        ?>
                    </tbody>
                </table>
                <!--/ End Shopping Summery -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Total Amount -->
                <div class="total-amount">
                    <div class="row">
                        <div class="col-lg-8 col-md-5 col-12">
                        </div>
                        
                        <div class="col-lg-4 col-md-7 col-12">
                            <div class="right">
                                <ul>
                                    <li>
                                        Total Products
                                        <span>
                                            <?php
                                                try {
                                                    echo $order->cartCount();
                                                } catch (\Throwable $th) {
                                                    echo '<script>alert("Some thing went wrong!!!");</script>';
                                                }
                                            ?>
                                        </span>
                                    </li>
                                    <li>Shipping<span>Free</span></li>
                                    <li class="last">
                                        Cart Total
                                        <span>
                                            Rs. 
                                            <?php
                                            
                                                try {
                                                    echo $order->getTotal();
                                                } catch (\Throwable $th) {
                                                    echo '<script>alert("Some thing went wrong!!!");</script>';
                                                }
                                            
                                            ?>
                                        </span>
                                    </li>
                                </ul>
                                <?php
                                            
                                    try {
                                        if (isset($_SESSION['role'])) {
                                            echo '
                                                <div class="button5">
                                                    <a href="checkout.php" class="btn">proceed to checkout</a>
                                                </div>
                                            ';
                                        }
                                    } catch (\Throwable $th) {
                                        echo '<script>alert("Some thing went wrong!!!");</script>';
                                    }
                                
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Total Amount -->
            </div>
        </div>
    </div>
</div>