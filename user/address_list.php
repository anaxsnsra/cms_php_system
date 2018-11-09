<table class="table table-responsive table-hover">
    <tr>
        <th>Fullname</th>
        <th>Address</th>
        <th>Postcode</th>
        <th>Phone Number</th>
        <th></th>
    </tr>
    <tr>
        <td><?php echo $user_firstname . " " . $user_lastname?></td>
        <?php
        $query = "SELECT * FROM address WHERE address_id = {$_SESSION['address_id']}";
        $select_address_id = mysqli_query($con,$query);
        while ($row = mysqli_fetch_array($select_address_id))
        {
        $address_id = $row['address_id'];
        $address_line_one = $row['address_line_one'];
            echo "<td>{$address_line_one}</td>";
        }
        ?>
        <?php
        $query = "SELECT * FROM zipcode WHERE zipcode_id = {$_SESSION['zipcode_id']}";
        $select_zipcode_id = mysqli_query($con,$query);
        while ($row = mysqli_fetch_array($select_zipcode_id))
        {
            $zipcode_id = $row['zipcode_id'];
            $zipcode = $row['zipcode'];
            echo "<td>{$zipcode}</td>";
        }
        ?>
        <td><?php echo $user_phone ?></td>
        <td><a href="./user_profile.php?source=edit_address">Edit</a></td>
    </tr>
</table>
