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
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<title>Team Fluidity Gaming - Register</title>
</head>
<body>
    <div class="container">
        <?php include_once 'sidebar.php'?>
        <?php include_once 'header.php'?>
        <div class="row reg-main">
    <div class="col-md-12">
    <img class="img-responsive move-reg-img" src="/images/regpic.png" alt="registration picture"/>
    </div>
    <form action="../controller/register.php" method="post" name="registration" class="form-move">
    <div class="move-form">
    <div class="col-md-12"><p class="contact-message"><?php echo $error;?><?php echo $message;?></p>
    <h3 style="color:#227094;">Username:</h3>
    <input class="whole-width" type="text" id="userName" name="username" <?php if (isset($user_name)) {
                echo "value='$user_name'";
            } ?>>
    </div>
    <div class="col-md-12">
    <h3 style="color:#227094;">Email:</h3>
    <input class="whole-width" type="text" id="email" name="email" <?php
                if (isset($email)) {
                    echo "value='$email'";
                }
                ?>
    </div>
    <div class="col-md-12">
    <h3 style="color:#227094;">Password:</h3>
    <input class="half-width" type="password" name="password" id="password">
    </div>
    <div class="col-md-12">
    <button class="move-reg-button" type="submit" name="submit" value="submit">Register</button>
    </div>
        </div>
        </form>
        
</div>
        
    </div>
    <?php include_once 'footer.php'?>
</body>
</html>