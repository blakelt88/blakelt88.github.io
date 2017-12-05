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
<title>Team Fluidity Gaming - Contact US</title>
</head>
<body>
    <div class="container" id="contact">
        <?php include_once 'sidebar.php'?>
        <?php include_once 'header.php'?>
        <div class="row contact-main">
    
    <div class="col-md-12">
    <img class="img-responsive move-reg-img" src="/images/contactus.png" alt="contact us image"/>
    </div>
    <form class='form-move' action="contact_main.php" method="post">
    <div class="col-md-12"><p class="contact-message"><p class="contact-message"></p>
    <h3 style="color:#227094;">Name:</h3>
    <input class="whole-width" type="text" id="name" name="name"> 
    </div>
    <div class="col-md-12">
    <h3 style="color:#227094;">Email:</h3>
    <input class="whole-width" type="text" id="email" name="email">
    </div>
    <div class="col-md-12">
    <h3 style="color:#227094;">Message:</h3>
                <div class="col-sm-12">
                    <textarea class="contact-textarea" name="message" id="message"></textarea>
                </div>
        </div>
    <div class="col-md-12">
    <button class="move-reg-button" type="submit" name="action" value="send">Send</button>
    </div>
        </form>
</div>
        <?php include_once 'footer.php'?>
        
    </div>
</body>
</html>