<?php
include "layout/header_pages.php";
?>

<!--Navigation-->
<?php

include "layout/navigation.php";

?>
<?php
    if (isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['user_password'];

        $username = mysqli_real_escape_string($con,$username);
        $password = mysqli_real_escape_string($con,$password);

        $query = "SELECT * FROM user WHERE username = '{$username}'";
        $select_user_query = mysqli_query($con,$query);

        if (!$select_user_query)
        {
            die("QUERY FAILED" . mysqli_error($con));
        }

        while ($row = mysqli_fetch_array($select_user_query))
        {
            $db_id = $row['user_id'];
            $db_username = $row['username'];
            $db_firstname = $row['user_firstname'];
            $db_lastname = $row['user_lastname'];
            $db_password = $row['user_password'];
            $db_email = $row['user_email'];
            $db_address_id = $row['address_id'];
            $db_phone = $row['user_phone'];
            $db_user_role = $row['user_role'];
        }

        $hash = crypt($password,$db_password);

        if (password_verify($password,$db_password))
        {
            $_SESSION['username'] = $db_username;
            $_SESSION['user_id'] = $db_id;
            $_SESSION['user_firstname'] = $db_firstname;
            $_SESSION['user_lastname'] = $db_lastname;
            $_SESSION['user_email'] = $db_email;
            $_SESSION['address_id'] = $db_address_id;
            $_SESSION['user_phone'] = $db_phone;
            $_SESSION['user_role'] = $db_user_role;
            $_SESSION['address_id'] = $db_address_id;

            header("Location: ./userHomePage.php");
        }
        else
        {
            $error_message = "WRONG USERNAME OR PASSWORD";
        }

    }
?>
<!-- Page Content -->
<div align="center">
<section class="bg-light">
    <form class="custom-form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="form-group"><h1 class="text-center" style="color: saddlebrown">Login to your account</h1></div>
        <?php if (isset($error_message)): ?>
            <span><?php echo $error_message ?></span>
        <?php endif; ?>
        <div class="form-group">
            <label for="username" style="color: darkcyan" >Username</label>
            <input type="text" required value="" class="form-control" name="username" placeholder="Enter your username">
        </div>
        <div class="form-group">
            <label for="user_password" style="color: darkcyan">Password</label>
            <input type="password" required value="" class="form-control" name="user_password" placeholder="Enter your password">
        </div>
        <div class="form-group">
            <input type="submit" name="login" value="Login" class="btn btn-primary">
        </div>
    </form>
</section>
</div>
<!-- /.container -->
<!-- Footer -->
<?php
include "layout/footer.php";
?>
