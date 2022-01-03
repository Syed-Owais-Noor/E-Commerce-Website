<?php

    include_once 'database/crudSite.php';

    class order{
        private $total = 0;

        public function getTotal(){
            try {
                return $this->total;
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function setTotal($value){
            try {
                $this->total = $value;
                $_SESSION['total'] = $this->total;
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function addToCart($id, $image, $name, $price, $stock, $qty){
            try {
                if (isset($_SESSION['cart'])) {
                    $product_id = array_column($_SESSION['cart'], 'id');

                    if (in_array($id, $product_id)) {
                        echo '<script>alert("This product is already added in the cart!!!");</script>';
                    }
                    else {
                        $count = count($_SESSION['cart']);
                        $product_array = array(
                            'id' => $id,
                            'image' => $image,
                            'name' => $name,
                            'price' => $price,
                            'qty' => $qty,
                            'stock' => $stock
                        );
                        $_SESSION['cart'][$count] = $product_array;    
                    }
                }
                else {
                    $product_array = array(
                        'id' => $id,
                        'image' => $image,
                        'name' => $name,
                        'price' => $price,
                        'qty' => $qty,
                        'stock' => $stock
                    );
    
                    $_SESSION['cart'][0] = $product_array;
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function cartCount(){
            try {
                if (isset($_SESSION['cart'])) {
                    $count = count($_SESSION['cart']);
                    return $count;
                }
                else {
                    return 0;
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function showCart()
        {
            try {
                if (isset($_SESSION['cart'])) {
                    $result = 0;
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $total = 0;
                        echo '
                            <tr>
                                <td class="image"><center><img src="images/product/'.$value['image'].'" alt="Product Image"></center></td>
                                <td class="product-des">
                                    <p class="product-name"><a href="#">'.$value['name'].'</a></p>
                                </td>
                                <td class="price"><center><span>Rs. '.$value['price'].'</span></center></td>
                                <td class="qty"><center><span>'.$value['qty'].'</span></center></td>
                        ';

                            $total = (int)$value['price'] * (int)$value['qty'];

                        echo '
                                <td class="total-amount"><center><span>Rs. '.$total.'</span></center></td>
                                <td class="action"><a href="removeProduct.php?id='.$key.'"><center><i class="ti-trash remove-icon"></i></a></center></td>
                            </tr>
                        ';

                        $value['stock'] = (int)$value['stock'] - (int)$value['qty'];

                        $result = $result + $total;
                    }

                    $this->setTotal($result);
                }
                else {
                    echo '
                        <tr>
                            <td class="image"><center>-</center></td>
                            <td class="price"><center><span>-</span></center></td>
                            <td class="product-des">
                                <center><p class="product-name"><a href="#">CART IS EMPTY</a></p></center>
                            </td>
                            <td class="qty"><center><span>-</span></center></td>
                            <td class="total-amount"><center><span>-</span></center></td>
                            <td class="action"><a href="#><center><i class="ti-trash remove-icon"></i></a></center></td>
                        </td>
                    ';
                }

            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function confirmOrder($c_id, $c_name, $p_number, $city, $p_code, $c_address, $total_p, $cart_t, $p_method, $status)
        {
            try {
                $insertData = new crudOperation();

                if ($insertData->insertCustomerDetail('order_detail', $c_id, $c_name, $p_number, $city, $p_code, $c_address, $total_p, $cart_t, $p_method, $status) >= 0) {
                    $selectQuery = $insertData->selectOrderID('order_detail', $p_number);

                    while ($row = mysqli_fetch_assoc($selectQuery)) {
                        $o_id = $row['o_id'];

                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {

                                $value['stock'] = (int)$value['stock'] - (int)$value['qty'];

                                if ($insertData->updateStock('product', $value['id'], $value['stock']) > 0) {
                                    $total = 0;

                                    $total = (int)$value['price'] * (int)$value['qty'];

                                    $insertData->insertOrder('c_order', $o_id, $value['name'], $value['price'], $value['qty'], $total, $value['image']);
                                }
                            }
                        }
                    }

                    unset($_SESSION['cart']);

                    echo '<script>alert("Success, Your order has been recieved!!!");</script>';
                    echo '<script>window.location.href="index.php"</script>';
                }
                else {
                    echo '<script>alert("Sorry, Something went wrong!!!");</script>';
                }

            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }
    }

?>