<?php session_start();?>
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
<link rel="stylesheet" href="main.css">
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
<title>Team Fluidity Gaming</title>
</head>
<body>
    <div class="container">
        <?php include_once 'view/sidebar.php'?>
        <?php include_once 'view/header.php'?>
        <div class="row big-main">
    <div id="content"><iframe src="https://www.youtube.com/embed/AlsgFHafCac?&autoplay=1&loop=1&playlist=AlsgFHafCac" allowfullscreen id="content_iframe" name="content_iframe"></iframe>
    </div>
</div>
<div class="row below-big-main">
    <div class="col-md-6"><span><a href="view/tryout_main.php"><img class="tryout-img" src="/images/tryout.png" alt="Fluidity Tryout"></a></span></div>
    <div class="col-md-6"><span><a href="http://csgo-stats.com"><img class="stat-img" src="/images/stats.png" alt="Fluidity Tryout"></a></span></div>
</div>
        <?php include_once 'view/footer.php'?>
        
    </div>
</body>
</html>