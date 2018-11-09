<?php
include "layout/header_other_pages.php";
?>
    <!--Navigation-->
<?php
include "layout/navigation.php";
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
        $username = $row['username'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_password = $row['user_password'];
        $user_email = $row['user_email'];
        $user_phone = $row['user_phone'];
    }

    $address = $_SESSION['address_id'];
    $query_address = "SELECT * FROM address WHERE address_id = {$address}";
    $select_user_address = mysqli_query($con, $query_address);
    while ($row = mysqli_fetch_array($select_user_address)) {
        $address_id = $row['address_id'];
        $address_line_one = $row['address_line_one'];
    }

    $state_query = "SELECT * FROM state WHERE state_id = {$_SESSION['state_id']}";
    $select_user_state = mysqli_query($con, $state_query);
    while ($row = mysqli_fetch_array($select_user_state)) {
        $state_id = $row['state_id'];
        $state_name = $row['state_name'];
    }
}

?>
<div class="row">
<section class="col-sm-2">
    <h6>Welcome
        <?php
        echo $user_firstname . " " . $user_lastname;
        ?>
    </h6>
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="user_profile.php">
                    <span>Manage My Account</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Information</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Hey , <?php echo $username ?></h6>
                    <a class="dropdown-item" href="user_profile.php">My Profile</a>
                    <a class="dropdown-item" href="./user_profile.php?source=address_list">Address Book</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">My Orders</h6>
                    <a class="dropdown-item" href="#">My returns</a>
                    <a class="dropdown-item" href="#">My cancellations</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <span class="review">My Reviews</span>
                </a>
            </li>
        </ul>
</section>
    <section>
    <div class="container profile">
        <?php

        if (isset($_GET['source']))
        {
            $source = $_GET['source'];
        }
        else
        {
            $source = '';
        }

        switch ($source)
        {
            case 'edit_profile';
            include "user/edit_profile.php";
            break;

            case 'edit_address';
            include "user/edit_address.php";
            break;

            case 'reset_password';
            include "user/reset_password.php";
            break;

            case 'address_list';
            include "user/address_list.php";
            break;

            default:
                include "user/user_information.php";
        }

        ?>
    </div>
    </section>
</div>

<!-- Footer -->
<?php
include "layout/footer.php";
?>
