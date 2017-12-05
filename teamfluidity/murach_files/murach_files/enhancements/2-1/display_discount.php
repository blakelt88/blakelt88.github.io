<?php
// These are the variables that pull in input and also compute the data
$product_description = $_POST['product_description'];
$list_price = $_POST['list_price'];
$discount_percent = $_POST['discount_percent'];
$discount_amount = round($list_price * ($discount_percent * .01), 2);
$discount_price = round($list_price - $discount_amount, 2);
$sales_tax_rate = "8%";
$sales_tax_amount = round($discount_price * .08, 2);

// Empty variables meant to display error
$error = "";
$error2 = "";
$error3 = "";


//Error message code
if ( empty($product_description)) {
    $error = "*PD ERROR: Cannot be blank";
}

if ( empty($list_price) || !is_numeric($list_price)) {
    $error2 = "*LP ERROR: Must be a number";
}

if ( empty($discount_percent) || !is_numeric($discount_percent)) {
    $error3 = "*DP ERROR: Must be a number";
}

?>



<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
<meta name="author" content="Blake Turley">
<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <style>
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><span class="red"><?php echo $error; ?></span><br>

        <label>List Price:</label>
        <span><?php echo "$ " . $list_price; ?></span><span class="red"><?php echo $error2; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent . "%"; ?></span><span class="red"><?php echo $error3; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo "$ " . $discount_amount; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo "$ " . $discount_price; ?></span><br><br>
        
        <label>Sales Tax Rate:</label>
        <span><?php echo $sales_tax_rate; ?></span><br>
        
        <label>Sales Tax Amount:</label>
        <span><?php echo "$ " . $sales_tax_amount; ?></span><br>


    </main>
</body>
</html>