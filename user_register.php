<?php
    include "layout/header_pages.php";
?>
<!--Navigation-->
<?php
    include "layout/navigation.php";
?>
<?php


    if (isset($_POST['register_user'])) {
        $username = $_POST['username'];
        $user_email = $_POST['user_email'];
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_password = $_POST['user_password'];

        if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $user_password))
        {
            if (!empty($username) && !empty($user_email) && !empty($user_password) && !empty($user_firstname) && !empty($user_lastname))
            {
                $username = mysqli_real_escape_string($con, $username);
                $user_firstname = mysqli_real_escape_string($con, $user_firstname);
                $user_lastname = mysqli_real_escape_string($con, $user_lastname);
                $user_password = mysqli_real_escape_string($con, $user_password);
                $user_email = mysqli_real_escape_string($con, $user_email);

                $sql_username = "SELECT * FROM user WHERE username = '$username'";
                $sql_email = "SELECT * FROM user WHERE user_email = '$user_email'";
                $reg_username = mysqli_query($con,$sql_username) or die(mysqli_error($con));
                $reg_email = mysqli_query($con,$sql_email) or die(mysqli_error($con));

                if (mysqli_num_rows($reg_username) > 0){
                    $name_error = "Sorry. Username taken already la";
                }
                elseif (mysqli_num_rows($reg_email) > 0){
                    $email_error = "Sorry. Email taken already la";
                }
                else {
                    $user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 12));
                    $query = "INSERT INTO user (user_firstname,user_lastname,username,user_email,user_password,user_role) ";
                    $query .= "VALUES ('{$user_firstname}','{$user_lastname}','{$username}','{$user_email}','{$user_password}','subscriber')";

                    $register_user_query = mysqli_query($con, $query);
                    if (!$register_user_query) {
                        die("QUERY FAILED" . mysqli_error($con));
                    }
                    $success_message ="Registration success, please login";
                    $password_msg = "";
                }
            }
        } else {
            $password_msg = "Your password is weak. at least 1 upperCase character & 8 characters";
        }
    }
    else
    {
        $success_message = "";
        $password_msg = "";
    }

?>

<!-- Page Content -->
<section class="bg-light">
    <form class="custom-form" style="margin-left: auto;margin-right: auto" action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="form-group"><h1>Create your account</h1></div>
        <?php if (isset($success_message)): ?>
            <span><?php echo $success_message ?></span>
        <?php endif; ?>
        <div class="form-group">
            <label for="username" >Username</label>
            <input type="text" required value="" class="form-control" name="username" placeholder="Enter your username">
            <?php if (isset($name_error)): ?>
                <span><?php echo $name_error ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="user_email">Email</label>
            <input type="text" required value="" class="form-control" name="user_email" placeholder="Enter your email">
            <?php if (isset($email_error)): ?>
                <span><?php echo $email_error ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="user_firstname">Your First Name</label>
            <input type="text" required value="" class="form-control" name="user_firstname" placeholder="Enter your first name">
        </div>

        <div class="form-group">
            <label for="user_lastname">Your Last Name</label>
            <input type="text" required value="" class="form-control" name="user_lastname" placeholder="Enter your last name">
        </div>

        <div class="form-group">
            <label for="user_password">Password</label>
            <input type="password" required value="" class="form-control" name="user_password" placeholder="Enter your password">
            <?php if (isset($password_msg)): ?>
                <span><?php echo $password_msg ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <input type="submit" name="register_user" value="Register" class="btn btn-primary">
        </div>

        </form>
</section>
<!-- /.container -->
<!-- Footer -->
<?php
    include "layout/footer.php";
?>
