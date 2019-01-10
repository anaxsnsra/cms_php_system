<?php
include "layout/header_other_pages.php";
include "layout/userNavigation.php";
?>
<?php

        if (isset($_GET['o_id'])) {
            $order_progress = $_GET['o_id'];
            $query = "SELECT * FROM cust_order WHERE invoice_id = $order_progress";
            $select_query = mysqli_query($con,$query);
            while($row = mysqli_fetch_assoc($select_query))
            {
                $item_status_payment = "waiting for payment";
                $item_status = $row['item_status'];
                $tracking = $row['tracking_number'];
                ?>
                <div class="container" style="margin-top: 80px">
                    <ul class="progressBar">
                        <?php
                        if ($item_status == "Payment Done")
                        {
                            ?>
                            <li class="active"><?php echo $item_status_payment ?></li>
                            <li>Waiting for payment confirmation</li>
                            <li>Waiting for item to be completed</li>
                            <?php
                        }
                        elseif ($item_status == "payment complete")
                        {
                            ?>
                            <li class="active">Payment been verify</li>
                            <li class="active">Payment been made</li>
                            <li>Waiting for item to be completed</li>
                            <?php
                        }
                        elseif ($item_status == "item proceed")
                        {
                            ?>
                            <li class="active">Payment been verify</li>
                            <li class="active">Payment done</li>
                            <li class="active">Item been delivered</li>
                            <?php
                        }
                        ?>
                    </ul>
                    <br>
                    <div class="list-tracking" id="list_tracking">
                        <?php
                            if ($item_status == "Payment Done")
                            {
                                ?>
                                <div style="text-align: left">- Waiting for payment</div>
                                <div style="text-align: left">- Payment been verified</div>
                                <?php
                            }
                            elseif ($item_status == "payment complete")
                            {
                                ?>
                                <div style="text-align: left">- Waiting for payment</div>
                                <div style="text-align: left">- Payment has been confirmed and verified</div>
                                <div style="text-align: left">- Waiting for deliver</div>
                                <?php
                            }
                            elseif ($item_status == "item proceed")
                            {
                                ?>
                                <div style="text-align: left">- Waiting for payment</div>
                                <div style="text-align: left">- Payment has been confirmed and verified</div>
                                <div style="text-align: left">- Waiting for deliver</div>
                                <div style="text-align: left">- Item delivered</div>
                                <div style="text-align: left">- Tracking number = <?php echo $tracking ?></div>
                                <?php
                            }
                        ?>
                    </div>
                </div>

<?php
            }
        }
        ?>
<?php
    include "layout/footer.php";
?>


