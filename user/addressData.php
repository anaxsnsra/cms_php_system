<?php
include "../layout/db.php";

if (!empty($_GET['state_id'])) {

    $state_id = $_GET['state_id'];

    $query = "SELECT * FROM city WHERE state_id = {$state_id}";
    $select_all_city = mysqli_query($con, $query);
    $count_city = mysqli_num_rows($select_all_city);

    if ($count_city > 0) {

        echo "<option value=''>Select city</option>";

        while ($row = mysqli_fetch_array($select_all_city)) {
            $city_id = $row['city_id'];
            $city_name = $row['city_name'];

            echo "<option value='$city_id'>$city_name</option>";

        }
    }
    else{
        echo "<option value=''>City not available</option>";
    }

}
elseif (!empty($_GET['city_id']))
{
    $city_id = $_GET['city_id'];

    $zipcode_query = "SELECT * FROM zipcode WHERE city_id = {$city_id}";
    $select_all_zipcode = mysqli_query($con,$zipcode_query);
    $count_zipcode = mysqli_num_rows($select_all_zipcode);
    if ($count_zipcode > 0)
    {
        echo "<option value=''>Select Zipcode</option>";
        while ($row = mysqli_fetch_array($select_all_zipcode)){
            $zipcode_id = $row['zipcode_id'];
            $zipcode_num = $row['zipcode'];

            echo "<option value='$zipcode_id'>$zipcode_num</option>";
        }
    }
    else
    {
        echo "<option value=''>Zipcode not available</option>";
    }
}



