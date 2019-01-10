<?php
/**
 * Created by PhpStorm.
 * User: anaxc
 * Date: 3/1/2019
 * Time: 6:52 AM
 */
if (isset($_POST['create_product']))
 {
        $ram_brand = $_POST['brand'];
        $ram_model = $_POST['model'];
        $ram_price = $_POST['price'];
        $ram_details = $_POST['detail'];
        $ram_image = $_FILES['ram_image']['name'];
        $ram_image_temp = $_FILES['ram_image']['tmp_name'];

        $query = "INSERT INTO pc_ram (brand,model,ram_price,details,ram_image) VALUES ('{$ram_brand}','{$ram_model}','{$ram_price}','{$ram_details}','{$ram_image}')";
        move_uploaded_file($ram_image_temp, '../img/pc%product/ram');
        $create_product = mysqli_query($con, $query);

        if (!isset($create_product)) {
            die("QUERY FAILED" . mysqli_error($con));
        }
        echo "<p class='bg-light'>Product created. <a href='./products.php?source=ram'>view product</a>";
    }
?>

<form action="" method="post" enctype="multipart/form-data">
    <h1>Add new product</h1>
    <div class="form-group">
        <label for="title">Brand</label>
        <input type="text" class="form-control" name="brand">
    </div>
    <div class="form-group">
        <label for="title">Model</label>
        <input type="text" class="form-control" name="model">
    </div>
    <div class="form-group">
        <label for="title">Details</label>
        <input type="text" class="form-control" name="detail">
    </div>
    <div class="form-group">
        <label for="title">Price</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="form-group">
        <label for="post_image">Post images</label>
        <input type="file" class="form-control" name="ram_image">
    </div>
    <div class="form-group">
        <input type="submit" name="create_product" value="Publish Product" class="btn btn-primary">
    </div>
</form>
