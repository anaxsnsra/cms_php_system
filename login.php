<?php
include "layout/header_other_pages.php";
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
            $db_id = $row['id'];
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
            $_SESSION['user_firstname'] = $db_firstname;
            $_SESSION['user_lastname'] = $db_lastname;
            $_SESSION['user_email'] = $db_email;
            $_SESSION['address_id'] = $db_address_id;
            $_SESSION['user_phone'] = $db_phone;
            $_SESSION['user_role'] = $db_user_role;

            header("Location: index.php");
        }
        else
        {
            $error_message = "WRONG USERNAME OR PASSWORD";
            echo $error_message;
        }
    }
?>
<!-- Page Content -->
<section class="bg-light">
    <form class="custom-form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="form-group"><h1 class="text-center">Login to your account</h1></div>
        <div class="form-group">
            <label for="username" >Username</label>
            <input type="text" value="" class="form-control" name="username" placeholder="Enter your username">
        </div>
        <div class="form-group">
            <label for="user_password">Password</label>
            <input type="password" value="" class="form-control" name="user_password" placeholder="Enter your password">
        </div>
        <div class="form-group">
            <input type="submit" name="login" value="Login" class="btn btn-primary">
        </div>
    </form>
</section>
<!-- /.container -->
<!-- Footer -->
<?php
include "layout/footer.php";
?>
