<?php

if (isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
    $query = "SELECT * FROM user WHERE username = '{$username}'";
    $select_user_profile_query = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($select_user_profile_query))
    {
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_password = $row['user_password'];
        $user_email = $row['user_email'];
        $user_phone = $row['user_phone'];
    }
}

    if (isset($_POST['edit_user'])) {

        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_email = $_POST['user_email'];
        $user_phone = $_POST['user_phone'];

        $query = "UPDATE user SET ";
        $query .= "user_firstname = '{$user_firstname}', ";
        $query .= "user_lastname = '{$user_lastname}', ";
        $query .= "user_email = '{$user_email}', ";
        $query .= "user_phone = '{$user_phone}' ";
        $query .= "WHERE username = '{$username}' ";


        $update_query = mysqli_query($con, $query);

        if ($update_query) {
            $_SESSION['user_firstname'];
            ?>
            <script type="text/javascript">
                window.location.href='./user_profile.php';
            </script>
            <?php

            if (!$update_query) {
                die("QUERY FAILED" . mysqli_error($con));
            }
            echo "<p class='bg-success'>User been updated. <a href='./user_profile.php'>View Profile</a></p>";
        }
    }
    ?>

<h1>Edit profile</h1>
<div class="col-12 bg-light">
<form action="" method="post">
    <table>
        <tr>
            <td>
                <div class="form-group">
                    <label for="user_firstname">Your firstname</label><br>
                        <input type="text" value="<?php echo $user_firstname  ?>" class="firstname" name="user_firstname">
                </div>
            </td>
            <td></td>
            <td>
                <div class="form-group">
                    <label for="user_phone">Your phone</label><br>
                        <input type="text" value="<?php echo $user_phone ?>" class="phone" name="user_phone">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-group">
                    <label for="user_firstname">Your lastname</label><br>
                        <input type="text" value="<?php echo $user_lastname ?>" class="lastname" name="user_lastname">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-group">
                    <label for="user_email">Your email</label><br>
                        <input type="text" value="<?php echo $user_email ?>" class="email" name="user_email">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-group">
                    <input type="submit"  value="Save Changes" class="btn btn-primary" name="edit_user">
                </div>
            </td>
        </tr>
    </table>
</form>
</div>
