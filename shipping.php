<?php
include "layout/header_other_pages.php";
?>
    <!--Navigation-->
<?php
include "layout/userNavigation.php";
?>
<?php

//Set useful variables for paypal form
$paypalURL = "https://www.sandbox.paypal.com/cgi-bin/webscr"; //Test PayPal API URL
$paypalID = 'anaxcool95@gmail.com'; //Business Email

?>
<?php
if (isset($_POST['confirmOrder']))
{
    $cpu_model = $_POST['storedCpu'];
    $case_model = $_POST['storedCase'];
    $mobo_model = $_POST['storedMobo'];
    $gpu_model = $_POST['storedGraphicCard'];
    $ram_model = $_POST['storedRam'];
    $hdd_model = $_POST['storedHdd'];
    $ssd_model = $_POST['storedSSD'];
    $psu_model = $_POST['storedPowerSupply'];
    $totalAllPc = $_POST['totalValue'];
    $username = $_SESSION['username'];
    $order_status = "Shipping process";

    $query = "INSERT INTO cust_order (customer_username,cpu,gpu,mobo,casing,psu,ram,hdd,ssd,order_date,total_price,item_status) ";
    $query .= "VALUES ('{$username}','{$cpu_model}','{$gpu_model}','{$mobo_model}','{$case_model}','{$psu_model}','{$ram_model}','{$hdd_model}','{$ssd_model}',now(),'{$totalAllPc}','{$order_status}') ";

    $insert_cust_order = mysqli_query($con,$query);
    if (!$insert_cust_order)
    {
        die("QUERY FAILED" . mysqli_error($con));
    }
}
?>
<?php
if (isset($_SESSION['username']))
{
    $_SESSION['username'];
    $username = $_SESSION['username'];
    $query = "SELECT * FROM user WHERE username = '{$username}'";
    $select_user_profile_query = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($select_user_profile_query))
    {
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_password = $row['user_password'];
        $user_email = $row['user_email'];
        $user_phone = $row['user_phone'];
        $user_role = $row['user_role'];
        $user_address = $row['address_id'];
    }
}

?>
<section class="shipping col-md-9">
<div class="row">
<section class="col-sm-4 itemDetails">
    <?php
        if (isset($_GET['delivery_names'])) {
            $delivery = $_GET['delivery_names'];
            $query = "SELECT * FROM delivery_option WHERE delivery_id = $delivery";
            $select_delivery_query = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($select_delivery_query);
            $delivery_prices = $row['delivery_price'];
            $delivery_names = $row['delivery_name'];
        }
        else
        {
            $message = 0;
        }
    ?>

    <label for="delivery_choose">Choose your delivery services</label>
    <form>
    <select name="delivery_names" id="deliveryNames" onchange="this.form.submit()">
        <?php
            $query_delivery = "SELECT * FROM delivery_option";
            $select_delivery = mysqli_query($con,$query_delivery);
            while ($row = mysqli_fetch_assoc($select_delivery))
            {
                $delivery_id = $row['delivery_id'];
                $delivery_name = $row['delivery_name'];
                $delivery_price = $row['delivery_price'];
                $tax_price = $row['tax_price'];
            if ($delivery_id == 1)
            {
                echo "<option value=''>Select your delivery</option>";
            }
            else {
                echo "<option value='$delivery_id'>$delivery_name</option>";
            }
        }
        ?>
    </select>
    </form>
    <table class="table table-hover">
        <tr>
            <th>Order items</th>
            <th></th>
        </tr>
            <?php
            $username = $_SESSION['username'];
            $order_status = "Shipping process";

            $query = "SELECT * FROM cust_order WHERE customer_username = '{$username}' && item_status = '{$order_status}' ";
            $display_all_product = mysqli_query($con,$query);
            while ($row = mysqli_fetch_assoc($display_all_product))
            {
                $invoice_id = $row['invoice_id'];
                $cpu = $row['cpu'];
                $case = $row['casing'];
                $mobo = $row['mobo'];
                $ram = $row['ram'];
                $hdd = $row['hdd'];
                $ssd = $row['ssd'];
                $gpu = $row['gpu'];
                $psu = $row['psu'];
                $total_price = $row['total_price'];

                echo "<tr>
                        <td>Product List</td>
                  </tr>";
                echo "<tr>
                        <td>
                        <ul>
                            <li>$case</li>
                            <li>$cpu</li>
                            <li>$mobo</li>
                            <li>$ram</li>
                            <li>$hdd</li>
                            <li>$ssd</li>
                            <li>$gpu</li>
                            <li>$psu</li>
                        </ul>
                        </td>
                    </tr>";

            }
            ?>
    </table>
</section>
    <section class="col-sm-4 bg-light billing">
        <ul class="billText">
            <div>Shipping & billing</div>
            <label for="orderSummary">
                <h3 style="color: #71dd8a">Order Summary</h3>
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <input type="hidden" name="subtotal" value="<?php $total_price ?>">
                        <td><label>RM <?php echo $total_price ?></label></td>
                    </tr>
                    <tr>
                        <td>Tax %</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><label for=""> RM
                                <?php
                                if ($tax_price == 0 || $tax_price == "") {
                                    echo 0;
                                }
                                else
                                {
                                    echo $tax_price;
                                }
                                ?>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Shipping fees</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <input type="hidden" name="delivery_fee" value="<?php $delivery_price ?>">
                        <td>
                            <label for="">RM
                                <?php

                                if ($delivery_price == 0 || $delivery_price == "") {
                                    echo 0;
                                }
                                else
                                {
                                    if (!isset($_GET['delivery_names']))
                                    {
                                        echo 0;
                                    }
                                    else {
                                        echo $delivery_prices;
                                        echo "<br>";
                                        echo $delivery_names;
                                    }
                                }
                                ?>
                            </label>
                        </td>
                    </tr>
                </table>
            </label>
            <div>Address</div>
            <?php
            if ($user_address == 0 || $user_address == "")
            {
                echo "<button class='btn btn-light'>
                    <a href='./address_add.php' class='fa fa-plus' style='position: center'>Please add address</a>
                    </button>";
            }
            else{
                $address_query = "SELECT * FROM address WHERE user_id = '{$user_id}'";
                $select_user_address = mysqli_query($con,$address_query);
                while ($row = mysqli_fetch_assoc($select_user_address))
                {
                    $user_address_line = $row['address_line_one'];

                    echo "<div>$user_address_line</div>";
                }
            }
            ?>
        </ul>
        <?php
            if (!isset($_GET['delivery_names']))
            {
                echo "";
            }
            else {
                $totalAmount = $total_price + $delivery_prices;
                $query_order = "UPDATE cust_order SET total_amount = '{$totalAmount}' WHERE customer_username = '{$username}'";
                $select_cust_total = mysqli_query($con,$query_order);
            }
        ?>
        <form action="<?php echo $paypalURL ?>" method="post">
            <input type='hidden' name='business' value='<?php echo $paypalID ?>'>
        <table style="margin: auto 0 0 45px">
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><label for="totalAmount">Total Amount</label></td>
                <input type="hidden" name="amount" value="<?php echo $totalAmount ?>">
                <input type='hidden' name='item_number' value='<?php echo $invoice_id ?>'>
                <input type='hidden' name='cmd' value='_xclick'>
                <input type='hidden' name='currency_code' value='MYR'>
                <input type='hidden' name='return' value='http://localhost/erinapcworkshop/success.php'>
                <input type='hidden' name='cancel_return' value='http://localhost/erinapcworkshop/cancel.php'>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><label for="">RM <?php
                        if (!isset($_GET['delivery_names']))
                        {
                            echo 0;
                        }
                        else {
                            echo $totalAmount;
                        }
                        ?></label></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>
            <div style="margin-left: 60px">
                <img src="img/paypal_PNG22.png" alt="" width="70px" height="70px">
                <input type="submit" name="submit" class="btn btn-primary" value="payNow">
            </div>
        </form>
    </section>
</div>
</section>
<!-- Footer -->
<?php
include "layout/footer.php";
?>
