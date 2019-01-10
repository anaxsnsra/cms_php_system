<table class="table table-bordered table-hover table-responsive">
    <thead>
    <tr>
        <th>Id</th>
        <th>Firstname</th>
        <th>user_lastname</th>
        <th>username</th>
        <th>Email</th>
        <th>Role</th>
        <th>Phone</th>
        <!--        <th>Date</th>-->
    </tr>
    </thead>
    <tbody>
    <?php

    $query = "SELECT * FROM user";
    $select_users = mysqli_query($con,$query);

    while ($row = mysqli_fetch_assoc($select_users)) {
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
        $user_role = $row['user_role'];
        $phone = $row['user_phone'];


        echo "<tr>";
        echo "<td>{$user_id}</td>";
        echo "<td>{$user_firstname}</td>";
        echo "<td>{$user_lastname}</td>";
        echo "<td>{$username}</td>";
        echo "<td>{$user_email}</td>";
        echo "<td>{$user_role}</td>";
        echo "<td>{$phone}</td>";
//        echo "<td>{$user_date}</td>";

        echo "<td><a href='user.php?change_to_admin=$user_id'>Administrator</a></td>";
        echo "<td><a href='user.php?change_to_sub=$user_id'>Subscribers</a></td>";
        echo "<td><a href='user.php?delete=$user_id'>Delete</a></td>";
        echo "</tr>";
    }

    if (isset($_GET['change_to_admin']))
    {
        $the_user_id = $_GET['change_to_admin'];
        $query = "UPDATE user SET user_role = 'administrator' WHERE user_id = $the_user_id";
        $change_admin_user_query = mysqli_query($con, $query);
        header("Location: user.php");

    }

    if (isset($_GET['change_to_sub']))
    {
        $the_user_id = $_GET['change_to_sub'];
        $query = "UPDATE user SET user_role = 'subscribers' WHERE user_id = $the_user_id";
        $change_subs_query = mysqli_query($con, $query);
        header("Location: user.php");

    }

    if (isset($_GET['delete']))
    {
        $the_user_id = $_GET['delete'];
        $query = "DELETE FROM user WHERE user_id = {$the_user_id}";
        $delete_query = mysqli_query($con, $query);
        header("Location: user.php");

    }

    ?>
    </tbody>
</table>




