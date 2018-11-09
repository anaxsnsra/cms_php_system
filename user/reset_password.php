<?php

    if (isset($_POST['reset_password']))
    {
        $user_password = $_POST['user_new_password'];

        if (!empty($user_password)){
            $query_password = "SELECT user_password FROM user WHERE username = '{$username}'";
            $get_user_query = mysqli_query($con,$query);
            if (!$get_user_query)
            {
                die("QUERY FAILED" . mysqli_error($con));
            }
            else
            {
                $row = mysqli_fetch_array($get_user_query);
                $db_user_password = $row['user_password'];

                if ($db_user_password != $user_password)
                {
                    $hashed_password = password_hash($user_password,PASSWORD_BCRYPT,array('cost' => 10));
                }

                $query = "UPDATE user SET ";
                $query .= "user_password = '{$hashed_password}' ";
                $query .= "WHERE username = '{$username}'";

                $update_user_password = mysqli_query($con,$query);
                if (!$update_user_password)
                {
                    die("QUERY FAILED" . mysqli_error($con));
                }
                echo "<p class='bg-light'>Password been updated</p>" . " " . "<a href='./user_profile.php'>View Profile</a>";
            }
        }
    }

?>
<h1>Reset Password</h1>
<div class="col-12 bg-light">
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <div class="form-group">
                        <label for="user_firstname">Current Password</label><br>
                        <input type="password" value="<?php echo $hashed_password ?>" class="" name="">
                    </div>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label for="user_phone">Enter new password</label><br>
                        <input type="password" required name="user_new_password" id="user_new_password">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label for="user_firstname">Retype your new password</label><br>
                        <input type="password" required name="user_new_password_confirm" id="user_confirm_password">
                    </div>
                </td>
                <td>
                    <p id="password-validate"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <input type="submit"  value="Save Password" class="btn btn-primary" name="reset_password" onclick="return passValidate()">
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>