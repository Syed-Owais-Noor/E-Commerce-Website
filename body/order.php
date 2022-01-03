<?php

    include_once '../../controller/dashboard/order.php';

    try {
        if (!defined('DevEx')) {
            die('<script>window.location.href="../dashboard.php"</script>');
        }

        $order = new order();

        if (isset($_GET['invoice_CO'])) {
            $id = $_GET['invoice_CO'];
            $status = $_GET['status'];

            $order->changeStatus($id, $status);
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order Section</h4>
                        
                        <div class="table-responsive pt-3">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                    <tr>
                                        <th>ORDER</th>
                                        <th>DATE</th>
                                        <th>CURRENT STATUS</th>
                                        <th colspan="3";>ACTION</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                        try {
                                            $order->showOrderTable();
                                        } catch (\Throwable $th) {
                                            echo '<script>alert("Some thing went wrong!!!");</script>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->