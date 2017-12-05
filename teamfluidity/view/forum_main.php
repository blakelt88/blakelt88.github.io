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
        <div class="row">
		<div class="col-md-12 cat_links">
        <h1 class="forum-h1-categories">Categories</h1>
		<?php
		include_once("../model/database.php");
		$sql = "SELECT * FROM categories ORDER BY category_title ASC";
		$res = mysql_query($sql) or die(mysql_error());
		$categories = "";
		if (mysql_num_rows($res) > 0) {
			while ($row = mysql_fetch_assoc($res)) {
				$id = $row['id'];
				$title = $row['category_title'];
			$description = $row['category_description'];
			$categories .= "<a href='forum_view_category.php?cid=".$id."' class='cat_links'>".$title."<span class='description-color'> ( " .$description." ) </span></a>";
			}
			echo $categories;
			}else{
				echo "<li>There are no categories available yet.</li>";
			}
		?>
		</div>
		</div>
        <?php include_once 'footer.php'?>
        
    </div>
</body>
</html>