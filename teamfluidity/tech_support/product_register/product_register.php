<?php include '../view/header.php'; ?>
<link href="../main.css" rel="stylesheet" type="text/css">

<main>

    <h2>Register Product</h2>
    
      <form action="index.php" method="post">
            <input type ="hidden" name ="action" value ="verify"/>
        <label class="to_the_right">Customer: </label><?php echo $customer_first_name .' '.$customer_last_name ; ?><br>
        <div class="spacing"><label class="also_to_the_right">Product</label>
        <select name="product">
       <?php foreach ($products as $product) : ?>
        <option value="<?php echo $product['name']; ?>">
        <?php echo $product['name']; ?>
        </option>
        <?php endforeach; ?>
        </select></div>
        <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">
        <input class="button_right" type="submit" value="Register Product">
        </form>
       
       

</main>
<?php include '../view/footer.php'; ?>
