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
        <div class="row forum-body">
		<div class="col-md-12">
        <h1 class="forum-h1-categories">Topics</h1>
		<?php
// Connect to the database
include_once("../model/database.php");

// Function that will count how many replies each topic has
function topic_replies($cid, $tid) {
	$sql = "SELECT count(*) AS topic_replies FROM posts WHERE category_id='".$cid."' AND topic_id='".$tid."'";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
	return $row['topic_replies'] - 1;
}
// Function that will convert a user id into their username
function getusername($uid) {
	$sql = "SELECT username FROM users WHERE id='".$uid."' LIMIT 1";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
	return $row['username'];
}
// Function that will convert the datetime string from the database into a user-friendly format
function convertdate($date) {
	$date = strtotime($date);
	return date("M j, Y g:ia", $date);
}

// Assign local variables
$cid = $_GET['cid'];

// Check to see if the person accessing this page is logged in
if (isset($_SESSION['uid'])) {
	$logged = "<span class='or'> OR <span><a  href='forum_create_topic.php?cid=".$cid."' class='post-info'> Click Here To Create A Topic</a>";
} else {
	$logged = "<p class='please-login'>**PLEASE LOGIN ABOVE TO CREATE TOPICS IN THIS FORUM**</p>";
}
// Query that checks to see if the category specified in the $cid variable actually exists in the database
$sql = "SELECT id FROM categories WHERE id='".$cid."' LIMIT 1";
// Execute the SELECT query
$res = mysql_query($sql) or die(mysql_error());
// Check if the category exists
if (mysql_num_rows($res) == 1) {
	// Select the topics that are associated with this category id and order by the topic_reply_date
	$sql2 = "SELECT * FROM topics WHERE category_id='".$cid."' ORDER BY topic_reply_date DESC";
	// Execute the SELECT query
	$res2 = mysql_query($sql2) or die(mysql_error());
	// Check to see if there are topics in the category
	if (mysql_num_rows($res2) > 0) {
		// Appending table data to the $topics variable for output on the page
		$topics .= "<a href='forum_main.php' class='post-info'>Return To Forum Index</a>".$logged."";
		$topics .= "<table class='table'>";
		$topics .= "<thead><tr style='background-color: #222;'><th>Topic Title</th><th>Last User</th><th>Replies</th><th>Views</th></tr></thead>";
		// Fetching topic data from the database
		while ($row = mysql_fetch_assoc($res2)) {
			// Assign local variables from the database data
			$tid = $row['id'];
			$title = $row['topic_title'];
			$views = $row['topic_views'];
			$date = $row['topic_date'];
			$creator = $row['topic_creator'];
			// Check to see if the topic has every been replied to
			if ($row['topic_last_user'] == "") { $last_user = "N/A"; } else { $last_user = getusername($row['topic_last_user']); }
			// Append the actual topic data to the $topics variable
			$topics .= "<tbody><tr><td><a class='post-info' href='forum_view_topic.php?cid=".$cid."&tid=".$tid."'>".$title."</a><br /><span>Posted by: ".$last_user." on ".convertdate($date)."</span></td><td class='post_info'>".$last_user."</td><td class='post_info'>".topic_replies($cid, $tid)."</td><td class='post_info'>".$views."</td></tr></tbody>";
			
		}
		$topics .= "</table>";
		// Displaying the $topics variable on the page
		echo $topics;
	} else {
		// If there are no topics
		echo $topics .= "<a href='forum_main.php' class='post-info'>Return To Forum Index </a>".$logged."";
		echo "<p class='please-login'>There are no topics in this category yet.</p><p style='color:red;'></p>";
	}
} else {
	// If the category does not exist
	echo "<a class='return-forum-index' href='forum_main.php'><h1>Return To Forum Index </h1></a>";
	echo "<p style='color:red;'>You are trying to view a category that does not exist yet.";
}
?>
		</div>
		</div>
        <?php include_once 'footer.php'?>
        
    </div>
</body>
</html>