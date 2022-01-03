<?php

    include_once '../../database/crudDashboard.php';

    class order{
        public function showOrderTable()
        {
            try {
                $selectData = new crudOperation();

                $selectQuery = $selectData->showOrder2('order_detail', 'o_id');

                while ($row = mysqli_fetch_assoc($selectQuery)) {
                    if ($row['status'] == "completed") {
                        echo '
                            <tr>
                                <td><a href="invoice.php?invoice_CO='.$row['o_id'].'">invoice_CO_'.$row['o_id'].'</a></td>
                                <td>'.$row['date'].'</td>
                                <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                                <td><a href="removeOrder.php?invoice_CO='.$row['o_id'].'" class="icon-trash btn btn-danger"></a></td>
                            </tr>
                        ';
                    }
                    if ($row['status'] == "cancelled") {
                        echo '
                            <tr>
                                <td><a href="invoice.php?invoice_CO='.$row['o_id'].'">invoice_CO_'.$row['o_id'].'</a></td>
                                <td>'.$row['date'].'</td>
                                <td class="font-weight-medium"><div class="badge badge-danger">Cancelled</div></td>
                                <td><a href="removeOrder.php?invoice_CO='.$row['o_id'].'" class="icon-trash btn btn-danger"></a></td>
                            </tr>
                        ';
                    }
                    if ($row['status'] == "pending") {
                        echo '
                            <tr>
                                <td><a href="invoice.php?invoice_CO='.$row['o_id'].'">invoice_CO_'.$row['o_id'].'</a></td>
                                <td>'.$row['date'].'</td>
                                <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                                <td><a href="?invoice_CO='.$row['o_id'].'&status=processing" class="icon-play btn btn-info"></a></td>
                                <td><a href="?invoice_CO='.$row['o_id'].'&status=cancelled" class="icon-circle-cross btn btn-danger"></a></td>
                            </tr>
                        ';
                    }
                    if ($row['status'] == "processing") {
                        echo '
                            <tr>
                                <td><a href="invoice.php?invoice_CO='.$row['o_id'].'">invoice_CO_'.$row['o_id'].'</a></td>
                                <td>'.$row['date'].'</td>
                                <td class="font-weight-medium"><div class="badge badge-info">Processing</div></td>
                                <td><a href="?invoice_CO='.$row['o_id'].'&status=completed" class="icon-circle-check btn btn-success"></a></td>
                                <td><a href="?invoice_CO='.$row['o_id'].'&status=cancelled" class="icon-circle-cross btn btn-danger"></a></td>
                            </tr>
                        ';
                    }
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function changeStatus($id, $status)
        {
            try {
                $updateData = new crudOperation();

                if ($updateData->updateStatus('order_detail', $id, $status) > 0) {
                    echo '<script>alert("Success, Order status has been changed!!!");</script>';
                    echo '<script>window.location.href="order.php"</script>';
                }
                else {
                    echo '<script>alert("Fail, Order status has not changed!!!");</script>';
                }

            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }

        public function removeOrder($id){
            try {
                $deleteData = new crudOperation();

                if ($deleteData->deleteOrderDetail('order_detail', $id)) {
                    if ($deleteData->deleteOrder('c_order', $id)) {
                        echo '<script>alert("Success, Order has been removed!!!");</script>';
                        echo '<script>window.location.href="order.php"</script>';
                    }
                }
                else {
                    echo '<script>alert("Fail, To remove the category!!!");</script>';
                }
            } catch (\Throwable $th) {
                echo '<script>alert("Some thing went wrong!!!");</script>';
            }
        }
    }

?>