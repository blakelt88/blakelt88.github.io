<?php include '../view/header.php'; ?>
<link href="../main.css" rel="stylesheet" type="text/css">
<main>

    <h2>Customer Login</h2>
    <p>You must login before you can register a product.</p>

    <form action="index.php" method="post">
   <label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="kelly@example.com" class="textbox">
    
    <input type="submit" value="Login">
    </form>

     <?php echo '<p>' . (isset($error) ? $error : '') . '</p>' ?>

</main>
<?php include '../view/footer.php'; ?>

