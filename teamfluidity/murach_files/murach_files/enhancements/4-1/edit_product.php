<?php
// Get the product data

$category_id = $_POST['category'];
$product_id = $_POST['product_id'];
$code = $_POST['code'];
$name = $_POST['name'];
$price = $_POST['price'];



// Validate inputs
if ($category_id == null || $category_id == false ||
        $code == null || $name == null || $price == null || $price == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'UPDATE products
              SET 
              categoryID = :category_id,
              productCode = :code,
              productName = :name,
              listPrice = :price
              
              WHERE 
              
              productID = :product_id';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>