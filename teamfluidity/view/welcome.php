<?php 
        $loggedin = $_SESSION['loggedin'];
        $name = $_SESSION['username'];
        
        if($loggedin && ($username == TRUE)) {
            echo '<span> Welcome, '.$name.'!</span> | <a href="logout.php">Logout</a>';
        }

?>