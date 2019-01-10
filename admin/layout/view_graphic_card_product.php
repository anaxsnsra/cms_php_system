<a href="products.php?source=add_gpu"><input type="button" class="btn btn-primary" value="add new"></a>
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

    $query = "SELECT * FROM graphiccard";
    $select_all_graphic_card = mysqli_query($con,$query);
    while ($row = mysqli_fetch_array($select_all_graphic_card))
    {
        $graphic_card_id = $row['graphic_card_id'];
        $graphic_card_brand = $row['brand'];
        $graphic_card_model = $row['model'];
        $graphic_card_rate = $row['rate'];
        $graphic_card_price = $row['price'];
        $graphic_card_details = $row['detail'];
        $pc_graphic_card_image = $row['graphic_card_image'];


        echo "<tr>";
        echo "<td>{$graphic_card_id}</td>";
        echo "<td>{$graphic_card_brand}</td>";
        echo "<td>{$graphic_card_model}</td>";
        echo "<td>{$graphic_card_price}</td>";
        echo "<td>{$graphic_card_details}</td>";
        echo "<td><img src='img/pc%20product/graphic_card/$pc_graphic_card_image' alt=''></td>";
        echo "<td><a href='products.php?delete_gpu=$graphic_card_id'>Delete</a></td>";
        echo "</tr>";
    }

    ?>
    </tbody>
</table>




