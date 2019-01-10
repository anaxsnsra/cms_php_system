<?php
/**
 * Created by PhpStorm.
 * User: anaxc
 * Date: 10/12/2018
 * Time: 7:23 AM
 */
include ('layout/header_other_pages.php');
include ('layout/userNavigation.php');

$item_number = $_GET['item_number'];
$payment_gross = $_GET['amt'];
$currency_code = $_GET['cc'];
$txn_id = $_GET['tx'];
$payment_status = "Payment Done";
$payment_date = date('y-m-d H:i:s');
$prevProductResultQuery = null;
$item_memo = $_GET['item_name'];

//Get product price from database
$query_product_result = "SELECT total_amount FROM cust_order WHERE invoice_id = {$item_number}";
$select_product_amount = mysqli_query($con,$query_product_result);
$total_amount_rows = mysqli_fetch_assoc($select_product_amount);
$total_amount = $total_amount_rows['total_amount'];

if (!empty($txn_id) && $payment_gross == $total_amount){
    $prevProductResultQuery = $con->query("SELECT payments_id FROM payment WHERE txn_id = {$txn_id}");
    if ($prevProductResultQuery->num_rows > 0)
    {
        $payment_rows = $prevProductResultQuery->fetch_assoc();
        $last_insert_id = $payment_rows['payments_id'];
    }
    else
    {
        $insert = $con->query("INSERT INTO payment(txn_id,item_number,payment_gross,currency_code,payment_status,payment_date,memo) VALUES('{$txn_id}','{$item_number}','{$payment_gross}','{$currency_code}','{$payment_status}','{$payment_date}','{$item_memo}')");
        $last_insert_id = $con->insert_id;

        $insert_item_status = "UPDATE cust_order SET item_status = '{$payment_status}' WHERE invoice_id = {$item_number}";
        $update_cust_status = mysqli_query($con,$insert_item_status);
    }
    ?>
    <div class="form-group" style="margin-left: auto;margin-right: auto">
        <h1 style="color: coral">Your payment has been successful.</h1>
        <h1 style="color: coral">Your Payment ID - <?php echo $last_insert_id; ?></h1>
        <h1 style="color: coral">Check payment status <a href="order_status.php">Check status</a></h1>
    </div>
<?php }else{ ?>
    <h1>Your payment has failed.</h1>
<?php } ?>
<?php
    include "layout/footer.php";
?>


