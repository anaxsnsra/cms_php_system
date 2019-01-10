<?php
    session_start();
    include "../layout/db.php";
?>
<?php
    if (isset($_GET['i_id']))
    {
        $username = $_SESSION['username'];
        $user_id = $_SESSION['user_id'];
        $invoice_id = $_GET['i_id'];
        $query = "SELECT * FROM cust_order WHERE invoice_id = '{$invoice_id}'";
        $select_query = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($select_query);

        $cust_username = $row['customer_username'];
        $cpu = $row['cpu'];
        $gpu = $row['gpu'];
        $mobo = $row['mobo'];
        $casing = $row['casing'];
        $psu = $row['psu'];
        $ram = $row['ram'];
        $hdd = $row['hdd'];
        $ssd = $row['ssd'];
        $sub_total = $row['total_price'];
        $total_amount = $row['total_amount'];
        $order_date = $row['order_date'];
        $item_status = $row['item_status'];

        $user_query = "SELECT * FROM user WHERE username = '{$username}'";
        $select_user = mysqli_query($con,$user_query);
        $user_row = mysqli_fetch_assoc($select_user);
        $user_firstname = $user_row['user_firstname'];
        $user_lastname = $user_row['user_lastname'];
        $user_phone = $user_row['user_phone'];

        $address_query = "SELECT * FROM address WHERE user_id = '{$user_id}'";
        $select_address = mysqli_query($con,$address_query);
        $address_row = mysqli_fetch_assoc($select_address);
        $address_name = $address_row['address_line_one'];

        $payment_query = "SELECT * FROM payment WHERE item_number = '{$invoice_id}'";
        $select_payment = mysqli_query($con,$payment_query);
        $payment_row = mysqli_fetch_assoc($select_payment);
        $memo = $payment_row['memo'];
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

    <title>Invoice</title>

    <link rel='stylesheet' type='text/css' href='css/style.css' />
    <link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
    <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
    <script type='text/javascript' src='js/example.js'></script>

</head>

<body>

<div id="page-wrap">

    <textarea id="header">INVOICE</textarea>

    <div id="identity">

            <textarea id="address"><?php echo $cust_username ?></textarea>
        <div id="logo">

            <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
            </div>

            <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
            </div>
            <img id="image" src="" alt="logo" />
        </div>

    </div>

    <div style="clear:both"></div>

    <div id="customer">

            <textarea id="customer-title"><?php echo $cust_username ?></textarea>

        <table id="meta">
            <tr>
                <td class="meta-head">Invoice #</td>
                <td><textarea><?php echo $invoice_id ?></textarea></td>
            </tr>
            <tr>

                <td class="meta-head">Date</td>
                <td><textarea id=""><?php echo $order_date ?></textarea></td>
            </tr>
            <tr>
                <td class="meta-head">Amount Due</td>
                <td><div class="due">RM <?php echo $total_amount ?></div></td>
            </tr>

        </table>

    </div>

    <table id="items">

        <tr>
            <th colspan="1">Item</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <tr class="item-row">
            <td class="item-name"><ul>
                            <li>PC Casing - <?php echo $casing ?></li>
                            <li>PC CPU - <?php echo $cpu ?></li>
                            <li>PC Motherboard - <?php echo $mobo ?></li>
                            <li>PC RAM - <?php echo $ram ?></li>
                            <li>PC HDD - <?php echo $hdd ?></li>
                            <li>PC SSD - <?php echo $ssd ?></li>
                            <li>PC GRAPHIC CARD - <?php echo $gpu ?></li>
                            <li>PC POWER SUPPLY - <?php echo $psu ?></li>
                        </ul>
                        </td>

            <td class="description"><textarea><?php echo $memo ?></textarea></td>
            <td><span class="price"><?php echo $sub_total ?></span></td>
        </tr>
        <tr>
            <td colspan="" class="blank"> </td>
            <td colspan="" class="total-line">Subtotal</td>
            <td class="total-value"><div id="subtotal"><?php echo $sub_total ?></div></td>
        </tr>
        <tr>
            <td colspan="" class="blank"> </td>
            <td colspan="" class="total-line">Amount Paid</td>

            <td class="total-value"><textarea id="paid"><?php echo $total_amount ?></textarea></td>
        </tr>
    </table>

    <div id="terms">
    </div>

</div>

</body>

</html>