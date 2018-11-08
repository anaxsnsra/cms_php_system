<?php
    include "layout/header_other_pages.php";
?>
<!--Navigation-->
<?php
    include "layout/navigation.php";
?>
<?php
    if (isset($_POST['edit_user'])) {
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

                $user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 12));
                $query = "INSERT INTO user (user_firstname,user_lastname,username,user_email,user_password,user_role) ";
                $query .= "VALUES ('{$user_firstname}','{$user_lastname}','{$username}','{$user_email}','{$user_password}','subscriber')";

                $register_user_query = mysqli_query($con, $query);
                if (!$register_user_query)
                {
                    die("QUERY FAILED" . mysqli_error($con));
                }
                $message = "Register successful";
                $password_msg = "";
            }
        } else {
            $password_msg = "Your password is weak. at least 1 upperCase character & 8 characters";
            $message = "Field cannot be empty";
        }
    }
    else
    {
        $message = "";
        $password_msg = "";
    }

?>

<!-- Page Content -->
<section class="bg-light">
    <form class="custom-form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="form-group"><h1>Create your account</h1></div>
        <h6><?php echo $message ?></h6>
        <div class="form-group">
            <label for="username" >Username</label>
            <input type="text" value="" class="form-control" name="username" placeholder="Enter your username">
        </div>

        <div class="form-group">
            <label for="user_email">Email</label>
            <input type="text" value="" class="form-control" name="user_email" placeholder="Enter your email">
        </div>

        <div class="form-group">
            <label for="user_firstname">Your First Name</label>
            <input type="text" value="" class="form-control" name="user_firstname" placeholder="Enter your first name">
        </div>

        <div class="form-group">
            <label for="user_lastname">Your Last Name</label>
            <input type="text" value="" class="form-control" name="user_lastname" placeholder="Enter your last name">
        </div>

        <div class="form-group">
            <label for="user_password">Password</label>
            <input type="password" value="" class="form-control" name="user_password" placeholder="Enter your password">
            <label for="weak_pass"><?php echo $password_msg?></label>
        </div>
        <div class="form-group">
            <input type="submit" name="edit_user" value="Register" class="btn btn-primary">
        </div>
        </form>
</section>
<!-- /.container -->
<!-- Footer -->
<?php
    include "layout/footer.php";
?>
