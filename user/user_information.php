<?php

if (isset($_SESSION['username']))
{
    $_SESSION['username'];
    $username = $_SESSION['username'];
    $query = "SELECT * FROM user WHERE username = '{$username}'";
    $select_user_profile_query = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($select_user_profile_query))
    {
        $username = $row['username'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_password = $row['user_password'];
        $user_email = $row['user_email'];
        $user_phone = $row['user_phone'];
        $user_role = $row['user_role'];
    }
}

?>

<div class="container">
<div class="row">
    <div class="col-4 bg-light">
        <div><h4>Personal Profile
                <span>|</span>
                <a href="./user_profile.php?source=edit_profile">Edit</a>
            </h4></div>
        <div><?php echo $user_firstname . " " . $user_lastname  ?></div>
        <div><?php echo $user_email ?></div>
        <div><?php echo $user_role ?></div>
    </div>
    <div class="col-5 offset-1 bg-light address">
        <div><h4>Address Book
                <span>|</span>
                <a href="./user_profile.php?source=edit_address">Edit</a>
            </h4>
        </div>
        <div>&nbsp;</div>
        <div><span>DEFAULT SHIPPING ADDRESS</span></div>
        <div>&nbsp;</div>
        <div><?php echo $user_firstname . " " . $user_lastname ?></div>
        <?php
        $query = "SELECT * FROM address WHERE address_id = {$_SESSION['address_id']}";
        $select_address_id = mysqli_query($con,$query);
        while ($row = mysqli_fetch_array($select_address_id))
        {
            $address_id = $row['address_id'];
            $address_line_one = $row['address_line_one'];
            echo "<div>{$address_line_one}</div>";
        }
        ?>
        <div><?php echo $user_phone ?></div>

    </div>
</div>
    <div class="col-4 reset_password">
        <a href="./user_profile.php?source=reset_password"><input type="button" value="Reset Password" class="btn btn-outline-primary"></a>
    </div>
</div>
