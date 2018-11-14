<?php
    if (isset($_POST['edit_address'])) {

        $user_address = $_POST['address'];

        $query = "UPDATE address SET ";
        $query .= "address_line_one = '{$user_address}' ";

        $update_query = mysqli_query($con, $query);
        if (!$update_query) {
            die("QUERY FAILED" . mysqli_error($con));
        }
        echo "<p class='bg-success'>Address been updated. <a href='./user_profile.php'>View Profile</a></p>";
    }
?>
<h1>Edit Address</h1>
<div class="col-12 bg-light">
<form action="" method="post">
    <table>
        <tr>
            <td>Full name</td>
            <td>Address</td>
        </tr>
        <tr>
            <td><input type="text" value="<?php echo $user_firstname . " " . $user_lastname ?>" name="fullname"></td>
            <td><input type="text" size="50" name="address" value="<?php echo $address_line_one  ?>"></td>
        <tr>
        <tr>
            <td>Phone Number</td>
            <td>State</td>
        </tr>
        <tr>
            <td><input type="text" value="<?php echo $user_phone ?>" name="phoneNumber"></td>
            <td><select name="user_state" id="">

                    <?php
                    $query = "SELECT * FROM state";
                    $select_state = mysqli_query($con,$query);
                    if (!$select_state);
                    while ($row = mysqli_fetch_assoc($select_state)){
                        $state_id = $row['state_id'];
                        $state_name = $row['state_name'];

                        echo "<option value='$state_id'>$state_name</option>";
                    }
                    ?>
                </select></td>
        </tr>
            <td></td>
            <td>City</td>
        </tr>
        <tr>
            <td>
                <div class="form-group">
                    <input type="submit"  value="Save Changes" class="btn btn-primary" name="edit_address">
                </div>
            </td>
            <td>
                <select name="user_state" id="">

                    <?php
                    $query = "SELECT * FROM city_selangor";
                    $select_state = mysqli_query($con,$query);
                    if (!$select_state);
                    while ($row = mysqli_fetch_assoc($select_state)){
                        $state_id = $row['state_id'];
                        $state_name = $row['state_name'];

                        echo "<option value='$state_id'>$state_name</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Postcode</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="text" name="postcode"></td>
        </tr>
    </table>
</form>
</div>
