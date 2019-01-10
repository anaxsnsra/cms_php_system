<?php
    if (isset($_GET['o_id']))
    {
        $invoice_id = $_GET['o_id'];
        $query = "SELECT * FROM cust_order WHERE invoice_id = {$invoice_id}";
        $select_query = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($select_query);
        $order_status = $row['item_status'];

    }
?>
<?php
    if (isset($_POST['update_status']))
    {
        $order_status = $_POST['order_status'];
        $tracking = $_POST['tracking'];
        $query = "UPDATE cust_order SET item_status = '{$order_status}', tracking_number = '{$tracking}' WHERE invoice_id = {$invoice_id}";
        $update_status = mysqli_query($con,$query);
        if (!$update_status)
        {
            die("QUERY FAILED" . mysqli_error($con));
        }
        header('Location: ./order.php');
        echo "<p class='bg-success'>Order status been updated. <a href='./order.php'>View Order</a></p>";
    }
?>
<form action="" method="post">
<div class="form-group">
    <label for="order_status">Status</label>
    <select name="order_status" id="">

        <option value='<?php echo $order_status?>'>Update order status</option>;
        <?php
        if ($order_status == 'Payment Done')
        {
            echo "<option value='payment complete'>Payment Complete</option>";

        }
        elseif ($order_status == 'payment complete')
        {
            echo "<option value='item proceed'>Item proceed</option>";
        }
        elseif ($order_status == 'item proceed')
        {

        }
        ?>
    </select>
    <?php
        if ($order_status == "item proceed")
        {
            echo "<br>
                    <label>Update tracking number</label>
                    <br>
                    <input required type='text' name='tracking'>";
        }
    ?>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_status" value="Update">
</div>
</form>