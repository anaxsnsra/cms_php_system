<?php
/**
 * Created by PhpStorm.
 * User: anaxc
 * Date: 3/1/2019
 * Time: 6:22 AM
 */
if (isset($_POST['create_product']))
{
    $mobo_brand = $_POST['brand'];
    $mobo_model = $_POST['model'];
    $mobo_price = $_POST['price'];
    $mobo_details = $_POST['detail'];
    $pc_mobo_image = $_FILES['mobo_image']['name'];
    $pc_mobo_image_temp = $_FILES['mobo_image']['tmp_name'];

    $query = "INSERT INTO motherboard (brand,model,price,details,mobo_image) VALUES ('{$mobo_brand}','{$mobo_model}','{$mobo_price}','{$mobo_details}','{$pc_mobo_image}')";
    move_uploaded_file($pc_mobo_image_temp,'../img/pc%product/motherboard');
    $create_product = mysqli_query($con,$query);

    if (!isset($create_product))
    {
        die("QUERY FAILED" . mysqli_error($con));
    }

    $the_graphic_card = mysqli_insert_id($con);
    echo "<p class='bg-light'>Product created. <a href='./products.php?source=mobo'>view product</a>";
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
        <input type="file" class="form-control" name="mobo_image">
    </div>
    <div class="form-group">
        <input type="submit" name="create_product" value="Publish Product" class="btn btn-primary">
    </div>
</form>