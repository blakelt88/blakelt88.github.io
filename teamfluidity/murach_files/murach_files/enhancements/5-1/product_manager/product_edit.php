<?php include '../view/header.php'; ?>
<link href="../main.css" rel="stylesheet" type="text/css">
<main>
     
    <h1>Edit Product</h1>
    <form action="index.php" method="post" id="edit_product_form">
         <input type="hidden" name="action" value="edit_product">

        <label>Category:</label>
        <select name="category_id">
        <?php foreach ( $categories as $category ) : ?>
            <option value="<?php echo $category['categoryName']; ?>">
                <?php echo $category['categoryID']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>
        <label>Code:</label>
        <input type="text" name="productCode" id="code" value="<?php echo $code; ?>">
        <br>

        <label>Name:</label>
        <input type="text" name="productName" id="name" value="<?php echo $name; ?>"> 
        <br>

      
        <label>List Price:</label>
        <input type="text" name="listPrice" id="price" value="<?php echo $price; ?>" >
        <br>
        <!--       involve the product_id as a hidden value-->
 <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id; ?>">
        <label>&nbsp;</label>
        <input type="submit" value="Save Changes" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_products">View Product List</a>
    </p>

</main>
 <?php include '../view/footer.php';?>
