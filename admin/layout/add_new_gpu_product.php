<?php
    if (isset($_POST['create_product']))
    {
        $graphic_card_brand = $_POST['brand'];
        $graphic_card_model = $_POST['model'];
        $graphic_card_price = $_POST['price'];
        $graphic_card_details = $_POST['detail'];
        $pc_graphic_card_image = $_FILES['gpu_images']['name'];
        $pc_graphic_card_image_temp = $_FILES['gpu_images']['tmp_name'];

        $query = "INSERT INTO graphiccard (brand,model,power,rate,price,detail,graphic_card_image) VALUES ('{$graphic_card_brand}','{$graphic_card_model}','','','{$graphic_card_price}','{$graphic_card_details}','{$pc_graphic_card_image}')";
        move_uploaded_file($pc_graphic_card_image_temp,'../img/pc%product/graphic_card');
        $create_product = mysqli_query($con,$query);

        if (!isset($create_product))
        {
            die("QUERY FAILED" . mysqli_error($con));
        }

        $the_graphic_card = mysqli_insert_id($con);
        echo "<p class='bg-light'>Product created. <a href='./products.php?source=graphic_card'>view product</a>";
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
        <input type="file" class="form-control" name="gpu_images">
    </div>
    <div class="form-group">
        <input type="submit" name="create_product" value="Publish Product" class="btn btn-primary">
    </div>
</form>