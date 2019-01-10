<?php
include "../layout/header_pages.php";
?>
<!--Navigation-->
<?php
include "../layout/navigation.php";
?>
<div class="form-group">
            <label for="user_address">Address</label>
            <input type="text" value="" class="form-control" name="user_lastname" placeholder="address">
        </div>
        <div class="form-group">
            <table>
                <tr>
                    <td>State</td>
                </tr>
                <tr>
                <td><select name="user_state" id="users_state">
                        <option value="">Select state</option>

                        <?php
                        $query = "SELECT * FROM state";
                        $select_state = mysqli_query($con,$query);
                        $count_state = mysqli_num_rows($select_state);
                        if ($count_state > 0) {
                            while ($row = mysqli_fetch_assoc($select_state)) {
                                $state_id = $row['state_id'];
                                $state_name = $row['state_name'];

                                echo "<option value='$state_id'>$state_name</option>";
                            }
                        }
                        ?>
                    </select></td>
                </tr>
                <tr>
                <td>City</td>
                </tr>
                <tr>
                    <td><select name="" id="users_city">
                            <option value="">Select state first</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Postcode</td>
                </tr>
                <tr>
                    <td><select name="" id="users_zipcode">
                            <option value="">Select city first</option>
                        </select></td>
                </tr>
            </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#users_state').on('change',function () {
                var stateID = $(this).val();
                if (stateID)
                {
                    $.ajax(
                        {
                            type:'GET',
                            url:'user/addressData.php',
                            data:'state_id=' + stateID,
                            success:function (html) {
                                $('#users_city').html(html);

                            }
                        }
                    );
                }
                else
                {
                    $('#users_city').html('<option value="">Select state first</option>');
                }
            });
            $('#users_city').on('change',function () {
                var cityID = $(this).val();
                if (cityID)
                {
                    $.ajax(
                        {
                            type: 'GET',
                            url:'user/addressData.php',
                            data:'city_id=' + cityID,
                            success:function (html) {
                                $('#users_zipcode').html(html);
                            }
                        }
                    );
                }
                else
                {
                    $('#users_zipcode').html('<option value="">Select city first</option>')
                }
            })

        });
        </script>

<!-- /.container -->
<!-- Footer -->
<?php
include "../layout/footer.php";
?>
