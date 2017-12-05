<?php session_start(); ?>
<?php require 'control.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <main>
        <h1>Future Value Calculator</h1>

        <label>Investment Amount:</label>
        <span><?php echo $_SESSION['investment']; ?></span><br>

        <label>Yearly Interest Rate:</label>
        <span><?php echo $_SESSION['yearly_rate_f']; ?></span><br>

        <label>Number of Years:</label>
        <span><?php echo $_SESSION['years']; ?></span><br>

        <label>Future Value:</label>
        <span><?php echo $_SESSION['future_value_f']; ?></span><br>
        
        <label> Compound Monthly:</label>
        <span><?php echo $_SESSION['wants_monthly']; ?></span><br>
    </main>
</body>
</html>