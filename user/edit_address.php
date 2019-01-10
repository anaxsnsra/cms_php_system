<?php
    if (isset($_POST['edit_address'])) {

        $users_address = $_POST['address'];

        $query = "UPDATE address SET ";
        $query .= "address_line_one = '{$users_address}' WHERE address_id = {$user_address}";

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
            <td>Address</td>
        </tr>
        <tr>
            <td><input type="text" size="50" name="address" value=""></td>
        <tr>
        <tr>
            <td>
                <div class="form-group">
                    <input type="submit"  value="Save Changes" class="btn btn-primary" name="edit_address">
                </div>
            </td>
        </tr>
    </table>
</form>
</div>

