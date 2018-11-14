<?php
$query = "SELECT * FROM pc_case";
$select_all_case = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($select_all_case))
{
    $case_id = $row['case_id'];
    $brand = $row['brand'];
    $model = $row['model'];
    $size = $row['size'];
    $rate = $row['rate'];
    $price = $row['price'];
    $details = $row['details'];
    $pc_case_image = $row['pc_case_image'];

    echo "<div class='col-lg-4 col-md-6 mb-4'>
            <div class='card h-100'>
                 <img class='card-img-top' width='260px' height='300px' src='img/pc%20product/case/$pc_case_image'>
                    <div class='card-body'>
                        <h4 class='card-title'>
                            <a href='#'>$brand  $model</a>
                        </h4>
                        <h5>RM $price</h5>
                        <p class='card-text'></p>
                </div>
            <div class='card-footer'>
            <small class='text-muted'>Details : $details</small><br>
            <small class='text-muted'>rate : $rate</small><br>
            <small class='text-muted'>size : $size</small><br>
            <small class='text-muted'><a href='build.php?build_id={$case_id}'><input type='button' class='btn-primary rounded' value='Choose this casing'></a></small>
            </div>
    </div>
</div>";
}
