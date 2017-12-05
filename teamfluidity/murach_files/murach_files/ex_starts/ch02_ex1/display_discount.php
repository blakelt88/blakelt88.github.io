<?php

$product_description = $_POST['product_description'];
$list_price = $_POST['list_price'];
$discount_percent = $_POST['discount_percent'];
$discount_amount = $list_price * ($discount_percent * .01);
$discount_price = $list_price - $discount_amount;
$sales_tax_rate = "8%";
$sales_tax_amount = $discount_price * .08;


$_POST = array("$product_description", "$list_price", "$discount_percent", "$discount_amount", "$discount_price", "$sales_tax_rate", "$sales_tax_amount");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $_POST[0]; ?></span><br>

        <label>List Price:</label>
        <span><?php echo "$ " . $_POST[1]; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo "$ " . $_POST[2]; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo "$ " . round($_POST[3], 2); ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo "$ " . round($_POST[4], 2); ?></span><br><br>

    </main>
</body>
</html>