<?php session_start();?>
<?php
require_once '../controller/forum_topics_controller.php';
?>
<?php
if ((!isset($_SESSION['uid'])) || ($_GET['cid'] == "")) {
	header("Location: forum_main.php");
	exit();
}
$cid = $_GET['cid'];
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
		</div>
		<div class="col-md-12 edit-create-topic">
			<form action="../controller/forum_topics_controller.php" method="post">
			<h2 class='h2-font'>Topic Title</h2>
			<input type="text" name="topic_title" class='topic_content2' size="98" maxlength="150"/>
			<h2 class='h2-font'>Topic Content</h2>
			<textarea name="topic_content" class='topic_content'></textarea>
			<br /><br />
			<input type="hidden" name="cid" value="<?php echo $cid; ?>"/>
			<input class='forum-button' type="submit" name="topic_submit" value="Create Topic"/>
		</div>
		</div>
        <?php include_once 'footer.php'?>
        
    </div>
</body>
</html>