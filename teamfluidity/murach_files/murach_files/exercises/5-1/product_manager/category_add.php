<?php
?>
<link href="../main.css" rel="stylesheet" type="text/css"/>
<?php include "../view/category_nav.php"?>
<main>
        <h1>Add Product</h1>
        <form action="add_product.php" method="post"
              id="add_product_form">

            <label>Category ID:</label>
            <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select><br>

            <label>Code:</label>
            <input type="text" name="code"><br>

            <label>Name:</label>
            <input type="text" name="name"><br>

            <label>List Price:</label>
            <input type="text" name="price"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Product"><br>
        </form>
        <p><a href="index.php">View Product List</a></p>
    </main>
    <?php include '../view/footer.php'; ?>

