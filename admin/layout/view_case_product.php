<a href="products.php?source=add_case"><input type="button" class="btn btn-primary" value="add new"></a>
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
        $query = "SELECT * FROM pc_case";
        $select_all_case = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($select_all_case)) {
            $case_id = $row['case_id'];
            $brand = $row['brand'];
            $model = $row['model'];
            $size = $row['size'];
            $rate = $row['rate'];
            $case_price = $row['price'];
            $details = $row['details'];
            $pc_case_image = $row['pc_case_image'];

            echo "<tr>";
            echo "<td>{$case_id}</td>";
            echo "<td>{$brand}</td>";
            echo "<td>{$model}</td>";
            echo "<td>{$case_price}</td>";
            echo "<td>{$details}</td>";
            echo "<td><img src='img/pc%20product/case/$pc_case_image' alt=''></td>";
            echo "<td><a href='products.php?delete_case=$case_id'>Delete</a></td>";
            echo "</tr>";
        }
