<a href="products.php?source=add_ram"><input type="button" class="btn btn-primary" value="add new"></a>
<table class="table table-bordered table-hover table-responsive">
    <thead>
    <tr>
        <th>Id</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Price</th>
        <th>Details</th>
        <th>Image</th>
    </tr>
    </thead>
    <tbody>
<?php
$query = "SELECT * FROM pc_ram";
$select_all_case = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($select_all_case)) {
    $ram_id = $row['ram_id'];
    $brand = $row['brand'];
    $model = $row['model'];
    $ram_price = $row['ram_price'];
    $details = $row['details'];
    $ram_image = $row['ram_image'];

    echo "<tr>";
    echo "<td>{$ram_id}</td>";
    echo "<td>{$brand}</td>";
    echo "<td>{$model}</td>";
    echo "<td>{$ram_price}</td>";
    echo "<td>{$details}</td>";
    echo "<td><img src='img/pc%20product/ram/$ram_image' alt=''></td>";
    echo "<td><a href='products.php?delete_ram=$ram_id'>Delete</a></td>";
    echo "</tr>";
}