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
<title>Team Fluidity Gaming - About Us</title>
</head>
<body>
    <div class="container">
        <?php include_once 'sidebar.php'?>
        <?php include_once 'header.php'?>
        <div class="row about-main">
    <div class="col-lg-1 about-img-edit"></div>
    <div class="col-lg-11 about-text-edit"><p>We are Counter-Strike: Global Offensive players that love the games competitive aspect. We welcome any players 18 and older to try out for our team no matter what rank they are. As we get going we will have teams for all different tiers of competetive play. In order to be a part of our team you must be mature, respectful, skilled and willing to push themselves to get better. You can feel comfortable being a part of this team whether you are a daily gamer, once a week or even once a month player. We want to have enough people to be able to sub if someone's life takes them elsewhere the day of practice or a match. If you would like to to know more about us you can register and ask anything you want on our forums<a href="registration_main.php"> here </a>If you want to tryout visit the<a href="tryout_main.php"> tryout </a>to know what you can do for a chance to be part of the team!</p></div>
</div>
        <?php include_once 'footer.php'?>    
    </div>
</body>
</html>