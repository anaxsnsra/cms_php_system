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

<div class="container">
<div class="row">
    <div class="col-5 bg-light">
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
                <a href="./user_profile.php?source=address_list">Edit</a>
            </h4>
        </div>
        <div>&nbsp;</div>
        <div><span>DEFAULT SHIPPING ADDRESS</span></div>
        <div>&nbsp;</div>
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
        <div><?php echo $user_phone ?></div>

    </div>
</div>
    <div class="col-4 reset_password">
        <a href="./user_profile.php?source=reset_password"><input type="button" value="Reset Password" class="btn btn-outline-primary"></a>
    </div>
</div>
