<div class="container item">
    <form action="" method="post">
        <table class="table table-responsive">
            <tr><div id="bulkOptionContainer" class="col-md-3">
                    <select class="form-control" name="bulkOptions" id="">
                        <option value="">Select option</option>
                        <option value="delete">Delete</option>
                    </select>
                    <input type="submit" onclick="javascript: return confirm('Are your want to delete');" name="submit" class="btn btn-success" value="Apply">
                </div>
            </tr>
            <br>
            <tr>
                <th><input type="checkbox" id="selectAllBoxes" class=""></th>
                <th>Invoice ID</th>
                <th>CPU</th>
                <th>Graphic Card</th>
                <th>Motherboard</th>
                <th>PC casing</th>
                <th>PC Power supply</th>
                <th>PC RAM</th>
                <th>PC HDD</th>
                <th>PC SSD</th>
                <th>PC Order date</th>
                <th>Sub Total Price</th>
                <th>Total Price</th>
                <th>Status</th>
            </tr>
            <?php

            $product_per_page = 2;
            if (!isset($_GET['product_page']))
            {
                $product_page = 1;
            }
            else
            {
                $product_page = $_GET['product_page'];
            }
            if ($product_page == "" || $product_page == 1)
            {
                $product_page_1 = 0;
            }
            else
            {
                $product_page_1 = ($product_page*$product_per_page) - $product_per_page;
            }


            $username = $_SESSION['username'];



            $product_query = "SELECT * FROM cust_order";
            $count_cust_product = mysqli_query($con,$product_query);

            $query = "SELECT * FROM cust_order LIMIT $product_page_1,$product_per_page";
            $select_all_cust_product = mysqli_query($con,$query);
            $count_product = mysqli_num_rows($select_all_cust_product);
            $count_product = ceil($count_product / 1);


            while ($row = mysqli_fetch_assoc($select_all_cust_product))
            {
                $invoice_id = $row['invoice_id'];
                $cust_username = $row['customer_username'];
                $cpu = $row['cpu'];
                $gpu = $row['gpu'];
                $mobo = $row['mobo'];
                $casing = $row['casing'];
                $psu = $row['psu'];
                $ram = $row['ram'];
                $hdd = $row['hdd'];
                $ssd = $row['ssd'];
                $total_price = $row['total_price'];
                $total_amount = $row['total_amount'];
                $order_date = $row['order_date'];
                $item_status = $row['item_status'];



                echo "<tr>
                           <td><input type='checkbox' class='checkBoxes' name='checkBoxArray[]' value='$invoice_id'></td>
                           <td>$invoice_id</td>
                           <td>$cpu</td>
                           <td>$gpu</td>
                           <td>$mobo</td>
                           <td>$casing</td>
                           <td>$psu</td>
                           <td>$ram</td>
                           <td>$hdd</td>
                           <td>$ssd</td>
                           <td>$order_date</td>
                           <td>RM $total_price</td>
                           <td>RM $total_amount</td>
                           <td>$item_status</td>
                           <td><a href='order.php?source=update_order_status&o_id={$invoice_id}'>Update order status</a></td>
                           <td><a href='invoice.php?i_id={$invoice_id}'>Print invoice</a></td>";
            }
            ?>
            <?php

            if (isset($_POST['checkBoxArray']))
            {
                foreach ($_POST['checkBoxArray'] as $checkboxValue) {
                    $bulk_options = $_POST['bulkOptions'];
                    switch ($bulk_options) {
                        case 'delete':
                            $product_delete_query = "DELETE FROM cust_order WHERE invoice_id = {$checkboxValue}";
                            $delete_query = mysqli_query($con, $product_delete_query);
                            header("Location: order_status.php");
                            break;
                    }
                }
            }

            ?>
        </table>
    </form>
    <!--        pager navigation      -->
    <ul class="pagination" style="margin-left: 500px">
        <?php
        for ($i = 1; $i <= $count_product; $i++)
        {
            if ($i == $product_page)
            {
                echo "<li class='page-item active'><a class='page-link' href='order_status.php?product_page={$i}'>{$i}</a></li>";
            }
            else
            {
                echo "<li class='page-item'><a class='page-link' href='order_status.php?product_page={$i}'>{$i}</a></li>";
            }
        }
        ?>
    </ul>
</div>
</section>
</div>

<?php
if (isset($_GET['delete']))
{
    $product_id =$_GET['delete'];
    $product_delete_query = "DELETE FROM cust_order WHERE invoice_id = {$invoice_id}";
    $delete_query = mysqli_query($con,$product_delete_query);
    header("Location: admin/order.php");
}

?>