<?php

if (isset($_SESSION['address_id'])) {
    $_SESSION['address_id'];
    $address = $_SESSION['address_id'];
    $query = "SELECT * FROM address WHERE address_id = {$address}";
    $select_user_address = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($select_user_address)) {
        $address_id = $row['address_id'];
        $address_line_one = $row['address_line_one'];
    }
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
}
?>
<h1>Edit profile</h1>
<div class="col-6 bg-light">
<form action="" method="post">
    <table>
        <tr>
            <td>
                <div class="form-group">
                    <label for="user_address">Your address</label><br>
                    <textarea  class="address" name="address" ><?php echo $address_line_one  ?></textarea>
                </div>
            </td>
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
