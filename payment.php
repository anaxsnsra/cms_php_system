<?php
include "layout/header_other_pages.php";
?>
    <!--Navigation-->
<?php
include "layout/navigation.php";
?>
<?php

    //Set useful variables for paypal form
    $paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
    $paypalID = 'anaxcool95@gmail.com'; //Business Email

?>

<form action="<?php echo $paypalURL ?>" method="post">
<section class="payment">
    <h2>Payment Details</h2>
    <div class="row">
    <div class="form-group col-md-6">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#credit" role="tab" aria-controls="creditCard" aria-selected="true">PayPal</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Online Banking</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="credit" role="tabpanel" aria-labelledby="home-tab">
                <div class="form-group credit">
                    <br>
                    <img src="http://pngimg.com/uploads/paypal/paypal_PNG23.png" width="100" height="50" alt="">
                    <input type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
                    <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
                </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <section class="">
                <div class="form-group">
                    <input type="button" class="btn btn-primary" value="payNow">
                </div>
            </section>
        </div>
    </div>
    </div>
        <section class="col-sm-4 bg-light amount">
            <ul class="amountText">
                <?php
                if (isset($_POST['checkout']))
                    $total_amount = $_POST['totalAmount'];
                    $query = "UPDATE cust_order SET total_amount = '{$total_amount}' WHERE customer_username = '{$username}'";
                $select_query = mysqli_query($con,$query);
                if (!$select_query)
                {
                    die("QUERY FAILED" . mysqli_error($con));
                }
                ?>
                <?php
                if (isset($_POST['checkout'])) {
                    $invoice_id = $_POST['invoice_id'];
                    $query = "SELECT * FROM cust_order WHERE invoice_id = {$invoice_id}";
                    $select_cust_payment = mysqli_query($con, $query);

                    while ($row = mysqli_fetch_assoc($select_cust_payment)) {
                        $invoice_id = $row['invoice_id'];
                        $total_price = $row['total_price'];
                        $total_amount = $row['total_amount'];

                        echo "<div>Summary price & delivery</div>
                                <div>Total price before delivery : $total_price</div>
                                <div>Total amount include delivery : $total_amount</div>";

                        echo "
                                <input type='hidden' name='business' value={$paypalID}>

                                <input type='hidden' name='cmd' value='_xclick'>

                                <input type='hidden' name='item_number' value='$invoice_id'>
                                <input type='hidden' name='amount' value='$total_amount'>
                                <input type='hidden' name='currency_code' value='MYR'>

                                <input type='hidden' name='return' value='http://localhost/erinapcworkshop/success.php'>
                                <input type='hidden' name='cancel_return' value='http://localhost/erinapcworkshop/cancel.php'>
                                ";
                    }
                }
                ?>
            </ul>
        </section>
    </div>
</section>
</form>

<!-- Footer -->
<?php
include "layout/footer.php";
?>

