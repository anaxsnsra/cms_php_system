<a href="products.php?source=add_mobo"><input type="button" class="btn btn-primary" value="add new"></a>
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
$query = "SELECT * FROM motherboard";
$select_all_mobo = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($select_all_mobo)) {
    $mobo_id = $row['mobo_id'];
    $mobo_brand = $row['brand'];
    $mobo_model = $row['model'];
    $size = $row['size'];
    $rate = $row['rate'];
    $mobo_price = $row['price'];
    $mobo_details = $row['details'];
    $pc_mobo_image = $row['mobo_image'];

    echo "<tr>";
    echo "<td>{$mobo_id}</td>";
    echo "<td>{$mobo_brand}</td>";
    echo "<td>{$mobo_model}</td>";
    echo "<td>{$mobo_price}</td>";
    echo "<td>{$mobo_details}</td>";
    echo "<td><img src='img/pc%20product/motherboard/$pc_mobo_image' alt=''></td>";
    echo "<td><a href='products.php?delete_mobo=$mobo_id'>Delete</a></td>";
    echo "</tr>";
}