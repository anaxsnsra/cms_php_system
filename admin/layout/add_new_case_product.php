<?php
if (isset($_POST['create_product']))
{
    $case_brand = $_POST['brand'];
    $case_model = $_POST['model'];
    $case_price = $_POST['price'];
    $case_details = $_POST['detail'];
    $case_image = $_FILES['case_images']['name'];
    $case_image_temp = $_FILES['case_images']['tmp_name'];

    $query = "INSERT INTO pc_case (brand,model,price,details,pc_case_image) VALUES ('{$case_brand}','{$case_model}','{$case_price}','{$case_details}','{$case_image}')";
    move_uploaded_file($case_image_temp,'../img/pc%product/case');
    $create_product = mysqli_query($con,$query);

    if (!isset($create_product))
    {
        die("QUERY FAILED" . mysqli_error($con));
    }

    echo "<p class='bg-light'>Product created. <a href='./products.php?source=case'>view product</a>";
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
        <input type="file" class="form-control" name="case_images">
    </div>
    <div class="form-group">
        <input type="submit" name="create_product" value="Publish Product" class="btn btn-primary">
    </div>
</form>