<?php

    include_once '../../database/crudDashboard.php';

    class dashboard{
        public function showOrderTable(){
            try {
                $selectData = new crudOperation();

                $selectQuery = $selectData->showOrder1('order_detail');

                while ($row = mysqli_fetch_assoc($selectQuery)) {
                    if ($row['status'] == "completed") {
                        echo '
                            <tr>
                                <td><a href="invoice.php?invoice_CO='.$row['o_id'].'">invoice_CO_'.$row['o_id'].'</a></td>
                                <td>'.$row['date'].'</td>
                                <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                            </tr>
                        ';
                    }
                    if ($row['status'] == "cancelled") {
                        echo '
                            <tr>
                                <td><a href="invoice.php?invoice_CO='.$row['o_id'].'">invoice_CO_'.$row['o_id'].'</a></td>
                                <td>'.$row['date'].'</td>
                                <td class="font-weight-medium"><div class="badge badge-danger">Cancelled</div></td>
                            </tr>
                        ';
                    }
                    if ($row['status'] == "pending") {
                        echo '
                            <tr>
                                <td><a href="invoice.php?invoice_CO='.$row['o_id'].'">invoice_CO_'.$row['o_id'].'</a></td>
                                <td>'.$row['date'].'</td>
                                <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                            </tr>
                        ';
                    }
                    if ($row['status'] == "processing") {
                        echo '
                            <tr>
                                <td><a href="invoice.php?invoice_CO='.$row['o_id'].'">invoice_CO_'.$row['o_id'].'</a></td>
                                <td>'.$row['date'].'</td>
                                <td class="font-weight-medium"><div class="badge badge-info">Processing</div></td>
                            </tr>
                        ';
                    }
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function showCustomerOrder($id)
        {
            try {
                $selectData = new crudOperation();

                $selectQuery = $selectData->showOrder3('order_detail', $id);

                while ($row = mysqli_fetch_assoc($selectQuery)) {
                    if ($row['status'] == "completed") {
                        echo '
                            <tr>
                                <td><a href="invoice.php?invoice_CO='.$row['o_id'].'">invoice_CO_'.$row['o_id'].'</a></td>
                                <td>'.$row['date'].'</td>
                                <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                            </tr>
                        ';
                    }
                    if ($row['status'] == "cancelled") {
                        echo '
                            <tr>
                                <td><a href="invoice.php?invoice_CO='.$row['o_id'].'">invoice_CO_'.$row['o_id'].'</a></td>
                                <td>'.$row['date'].'</td>
                                <td class="font-weight-medium"><div class="badge badge-danger">Cancelled</div></td>
                            </tr>
                        ';
                    }
                    if ($row['status'] == "pending") {
                        echo '
                            <tr>
                                <td><a href="invoice.php?invoice_CO='.$row['o_id'].'">invoice_CO_'.$row['o_id'].'</a></td>
                                <td>'.$row['date'].'</td>
                                <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                            </tr>
                        ';
                    }
                    if ($row['status'] == "processing") {
                        echo '
                            <tr>
                                <td><a href="invoice.php?invoice_CO='.$row['o_id'].'">invoice_CO_'.$row['o_id'].'</a></td>
                                <td>'.$row['date'].'</td>
                                <td class="font-weight-medium"><div class="badge badge-info">Processing</div></td>
                            </tr>
                        ';
                    }
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }
    }

?>