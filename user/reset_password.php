<?php
    if (isset($_SESSION['username'])) {
        $_SESSION['username'];
        $username = $_SESSION['username'];
        $query = "SELECT * FROM user WHERE username = '{$username}'";
        $select_user_profile_query = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($select_user_profile_query)) {
            $user_password = $row['user_password'];
        }
    }
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
                $query .= "WHERE username = {$username}";

                $update_user_password = mysqli_query($con,$query);
            }

        }
    }

?>
<h1>Edit profile</h1>
<div class="col-6 bg-light">
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
                        <input type="password" value="" class="phone" name="user_new_password">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label for="user_firstname">Retype your new password</label><br>
                        <input type="password" value="" class="lastname" name="user_lastname">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <input type="submit"  value="Save Password" class="btn btn-primary" name="reset_password">
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>