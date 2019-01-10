<table class="table-responsive table-hover" border="1">
    <tr style="text-align: center">
        <th>Fullname</th>
        <th>Address</th>
        <th>Phone Number</th>
    </tr>
    <tr>
        <td><?php echo $user_firstname . " " . $user_lastname?></td>
        <?php
        if (isset($_SESSION['user_id'])) {
            $user_address_id = $_SESSION['user_id'];
            $query = "SELECT * FROM address WHERE user_id = {$user_address_id}";
            $select_address_id = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($select_address_id)) {
                $address_id = $row['address_id'];
                $address_line_one = $row['address_line_one'];
                echo "<td>{$address_line_one}</td>";
            }
        }
        else{
            echo "";
        }
        ?>
        <td><?php echo $user_phone ?></td>
        <td><a href="./user_profile.php?source=edit_address&edit_a=<?php echo $user_address_id ?>">Edit</a></td>
    </tr>
</table>