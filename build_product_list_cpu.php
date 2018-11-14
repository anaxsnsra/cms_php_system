<?php
$query = "SELECT * FROM pc_cpu";
$select_all_cpu = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($select_all_cpu))
{
    $cpu_id = $row['cpu_id'];
    $brand = $row['brand'];
    $model = $row['model'];
    $clockspeed = $row['clockspeed'];
    $maxspeed = $row['maxspeed'];
    $socket = $row['socket'];
    $core = $row['core'];
    $thread = $row['thread'];
    $cpuGraphic = $row['CPUGraphic'];
    $rate = $row['rate'];
    $price = $row['price'];
    $details = $row['details'];
    $pc_cpu_image = $row['cpu_image'];

    echo "<div class='col-lg-4 col-md-6 mb-4'>
            <div class='card h-100'>
                 <img class='card-img-top' width='260px' height='300px' src='img/pc%20product/cpu/$pc_cpu_image'>
                    <div class='card-body'>
                        <h4 class='card-title'>
                            <a href='#'>$brand  $model</a>
                        </h4>
                        <h5>RM $price</h5>
                        <p class='card-text'></p>
                </div>
            <div class='card-footer'>
            <small class='text-muted'>Details : $details</small><br>
            <small class='text-muted'>Rate : $rate</small><br>
            <small class='text-muted'>Clockspeed : $clockspeed</small><br>
            <small class='text-muted'>Maxspeed : $maxspeed</small><br>
            <small class='text-muted'>Socket : $socket</small><br>

            <small class='text-muted'><a href='build.php?case_id&cpu_id={$cpu_id}'><input type='button' class='btn-primary rounded' value='Choose this casing'></a></small>
            </div>
    </div>
</div>";
}
