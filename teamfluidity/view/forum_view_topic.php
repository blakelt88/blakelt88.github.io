<?php session_start();
 ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.min.js"></script>
  <script type="text/javascript">$.fn.ready(function() { $("h2").fitText(2, { 'minFontSize' : 18, 'maxFontSize' : 50 }); }); </script>
  <script type="text/javascript">$.fn.ready(function() { $("p").fitText(2, { 'minFontSize' : 9.5, 'maxFontSize' : 11.5 }); }); </script>
    <script type="text/javascript">$.fn.ready(function() { $("a.nav").fitText(2, { 'minFontSize' : 12, 'maxFontSize' : 15 }); }); </script>
<link rel="stylesheet" href="../main.css">
<script type="text/javascript">
$(document).ready(function(){
    $('#login-trigger').click(function() {
        $(this).next('#login-content').slideToggle();
        $(this).toggleClass('active');                    
        if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
            else $(this).find('span').html('&#x25BC;')
        })
});    
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var menu = "close";
        $('.menu-toggle').click(function(){
            if(menu == "close") {
                $('.sidebar').css('-webkit-transform', 'translate(0,0)');
                menu = "open";
            } else {
                $('.sidebar').css('-webkit-transform', 'translate(-100%,0)');
                menu = "close";
            }
            
        });
        
    });
</script>
<script>
$('.content').load('http://www.mywebsite.com/portfolio.php .content');    
</script>
    <script type="text/javascript">console.log( $('#content').css('height') );
console.log( $('#content_iframe').css('height') );</script>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<title>Team Fluidity Gaming - Forum</title>
</head>
<body>
    <div class="container forum-content responsive-table">
        <?php include_once 'sidebar.php'?>
        <?php include_once 'header.php'?>
        <div class='row forum-content2'>
		 <?php
// Connect to the database
include_once("../model/database.php");

// Function that will convert a user id into their username
function getusername($uid) {
	$sql = "SELECT * FROM users WHERE id='".$uid."' LIMIT 1";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
	return $row['username'];
}
// Function that will convert the datetime string from the database into a user-friendly format
function convertdate($date) {
	$date = strtotime($date);
	return date("M j, Y g:ia", $date);
}

// Assign local variables from the variables in the URL
$cid = $_GET['cid'];
$tid = $_GET['tid'];
// Select the topic data depending on the $cid and $tid variables
$sql = "SELECT * FROM topics WHERE category_id='".$cid."' AND id='".$tid."' LIMIT 1";
// Execute the SELECT query
$res = mysql_query($sql) or die(mysql_error());
// Check to see if the topic exists
if (mysql_num_rows($res) == 1) {
	echo "<table style='width:100%; background:#111; border:solid 1px #222;'>";
	// Check to see if the person accessing this page is logged in
	if ($_SESSION['uid']) { echo "<tr style='border:1px solid #222;'><td><input class='forum-button' type='submit' value='Add Reply' onClick=\"window.location = 'forum_post_reply.php?cid=".$cid."&tid=".$tid."'\" />"; } else { echo "<tr><td><p class='please-login'>**PLEASE LOGIN ABOVE TO REPLY**</p></td></tr>"; }
	// Fetch all the topic data from the database
	while ($row = mysql_fetch_assoc($res)) {
		// Query the posts table for all posts in the specified topic
		$sql2 = "SELECT * FROM posts WHERE category_id='".$cid."' AND topic_id='".$tid."'";
		// Execute the SELECT query
		$res2 = mysql_query($sql2) or die(mysql_error());
		// Fetch all the post data from the database
		while ($row2 = mysql_fetch_assoc($res2)) {
			// Echo out the topic post data from the database
			echo "<tr><td style='border: 1px solid #222;'><div class='col-md-3' style='border-right:solid 1px #222;'><h1 class='topic-title-change2'>".$row['topic_title']."</h1>by ".getusername($row2['post_creator'])."<br />".convertdate($row2['post_date'])."</div><div class='col-md-8'><span style='color:white;'>".$row2['post_content']."</span></div></tr>";
		}
		// Assign local variable for the current number of views that this topic has
		$old_views = $row['topic_views'];
		// Add 1 to the current value of the topic views
		$new_views = $old_views + 1;
		// Update query that will update the topic_views for this topic
		$sql3 = "UPDATE topics SET topic_views='".$new_views."' WHERE category_id='".$cid."' AND id='".$tid."' LIMIT 1";
		// Execute the UPDATE query
		$res3 = mysql_query($sql3) or die(mysql_error());
	}
	echo "</table>";
} else {
	// If the topic does not exist
	echo "<div class='col-md-12 no-top-div'><a href='forum_main.php' class='post_info'>Return To Forum Index</a><p style='color:red;'>Oops this topic does not exist.</p></div>";
}
?>
</div>
<?php include 'footer.php' ?>
  </div>
</body>
</html>