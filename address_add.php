<?php
include "layout/header_other_pages.php";
?>
<!--Navigation-->
<?php
include "layout/userNavigation.php";
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
        $user_address = $row['address_id'];
    }
}

if (isset($_POST['add_address']))
{
    $address_line_one = $_POST['user_address'];

    $query = "INSERT INTO address (address_line_one,user_id) ";
    $query .= "VALUES  ('{$address_line_one}','{$user_id}')";
    $address_add_query = mysqli_query($con,$query);

    if (!$address_add_query)
    {
        die("QUERY FAILED".mysqli_error($con));
    }
    else {
        $message = "Successful register address";

        $query = "SELECT * FROM address WHERE user_id = '{$user_id}'";
        $select_address = mysqli_query($con,$query);
        while ($row = mysqli_fetch_assoc($select_address))
        {
            $address_id = $row['address_id'];
        }
        $query = "UPDATE user SET address_id = '{$address_id}' WHERE user_id = {$user_id}";
        $update_address = mysqli_query($con, $query);
    }
}

?>
<form action="" method="post">
<div class="address_add">
    <?php if (isset($message)): ?>
        <span><?php echo $message ?></span>
        <span><a href='./user_profile.php'>View Profile</a></span>
    <?php endif; ?>
<div class="form-group" style="margin-right: 200px">
    <label for="user_address">Address</label>
    <textarea class="form-control" required name="user_address" placeholder="enter your address"></textarea>
        </div>
        <table>
                <tr>
                    <td><input type="submit" class="btn btn-primary" id="add_address" name="add_address" value="register address"></td>
                </tr>
            </table>
    </div>
</form>


<!-- /.container -->
<!-- Footer -->
<?php
include "layout/footer.php";
?>
