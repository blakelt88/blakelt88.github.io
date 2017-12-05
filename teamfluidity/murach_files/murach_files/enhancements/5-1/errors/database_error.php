<link href="../main.css" rel="stylesheet" type="text/css"/>
<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Database Error</h1>
    <p class="first_paragraph">There was an error connecting to the database.</p>
    <p>The database must be installed as described in the appendix.</p>
    <p>MySQL must be running as described in chapter 1.</p>
    <p class="last_paragraph">Error message: <?php echo $error_message; ?></p>
</div><!-- end main -->
<?php include '../view/footer.php'; ?>