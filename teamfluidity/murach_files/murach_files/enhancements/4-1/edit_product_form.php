<?php
$productCode = $_POST['productCode'];
$productName = $_POST['productName'];
$listPrice = $_POST['listPrice'];
$categoryID = $_POST['category_id'];
$product_id = $_POST['product_id'];
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Product Manager</h1></header>

    <main>
        <h1>Edit Product</h1>
        <form action="edit_product.php" method="post" id="edit_product_form">
            <input type='hidden' name='product_id' value="<?php echo $product_id; ?>">
              

            <label>Category ID:</label>
           <input type="text" name="category" value="<?php echo $categoryID; ?>"><br>

            <label>Code:</label>
            <input type="text" name="code" value="<?php echo $productCode; ?>"><br>

            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $productName; ?>"><br>

            <label>List Price:</label>
            <input type="text" name="price" value="<?php echo $listPrice; ?>"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
        <p><a href="index.php">View Product List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>