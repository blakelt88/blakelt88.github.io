<?php session_start();
 ?>
<!DOCTYPE HTML>
<html lang="en">



<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.min.js"></script>
  <script type="text/javascript">$.fn.ready(function() { $("h2").fitText(2, { 'minFontSize' : 18, 'maxFontSize' : 50 }); }); </script>
  <script type="text/javascript">$.fn.ready(function() { $("p").fitText(2, { 'minFontSize' : 9.5, 'maxFontSize' : 11.5 }); }); </script>
    <script type="text/javascript">$.fn.ready(function() { $("a.nav").fitText(2, { 'minFontSize' : 12, 'maxFontSize' : 15 }); }); </script>
<link rel="stylesheet" href="../main.css" type="text/css">
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
<title>Team Fluidity Gaming - Tryouts</title>
</head>
<body>
    <div class="container">
        <?php include_once 'sidebar.php'?>
        <?php include_once 'header.php'?>
        <div class="row about-main">
    <div class="col-lg-1 about-img-edit"></div>
    <div class="col-lg-11 tryout-main">
    <h1>Want To Tryout?</h1>
        <p>We believe in fair opportunity when it comes to tryouts. It doesn't matter what rank you are because we hope to build teams of any rank to participate and compete. Here is what you need to do to be able to tryout...</p>
	<ul>
		<li></li>
		<li></li>
        <li>1. Go to <a href="contact_main.php">Contact Us</a> and fill out the form.</li>    
        <li>2. Await a reponse which will contain a few time and dates of a potential tryout.</li>    
        <li>3. Respond with a decision on which time and day.</li>    
        <li>4. If you have any additional questions visit the form to ask.</li>    
        <li>5. TRYOUT! Best of luck!</li>    
	</ul>
    </div>
</div>
        <?php include_once 'footer.php'?>
        
    </div>
</body>
</html>