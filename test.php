
You can get the selected value from the drop down list simply using php without using JavaScript.

<html>
<head>
    <title>Country</title>
</head>
<body>
<form>
    Select Your Country
    <select name="country" onchange="this.form.submit()">
        <option value="" disabled selected>--select--</option>
        <option value="india">India</option>
        <option value="us">Us</option>
        <option value="europe">Europe</option>
    </select>
</form>
<?php
if(isset($_GET["country"])){
    $country=$_GET["country"];
    echo "select country is => ".$country;
}
?>
</body>
</html>