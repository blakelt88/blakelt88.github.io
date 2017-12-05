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
<title>Team Fluidity Gaming - CIT 336</title>
</head>
<body>
    <div class="container">
        <?php include 'sidebar.php'?>
        <?php include 'header.php'?>
        <div class="row below-big-main">
    <div class="col-md-6 exercize">
       <h1 class="h1threethirtysix">Exercises</h1>
       <p class=""><a href=http://teamfluiditygaming.com/murach_files/murach_files/exercises/2-1/2-1.html class="linkcolor main_336">Exercise 2-1</a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>
       <p class="">Exercise 3-1<img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>
       <p class=""><a href=http://teamfluiditygaming.com/murach_files/murach_files/exercises/4-1/index.php class="linkcolor main_336">Exercise 4-1</a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>
       <p class=""><a href=http://teamfluiditygaming.com/murach_files/murach_files/exercises/4-1/index.php class="linkcolor main_336">Exercise 5-1</a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>
       <!--<p class="">Exercise 6-1<img src="/images/checkmark.png" class="checkmark" alt="checkmark">
       <p class="">Exercise 6-2<img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>-->
       <p class=""><a href=../murach_files/murach_files/exercises/7-2/index.php class="linkcolor main_336">Exercise 7-2</a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>
       <p class=""><a href=../murach_files/murach_files/exercises/8-2/index.php class="linkcolor main_336">Exercise 8-2</a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>
       <!--<p class=""><a href=http://teamfluiditygaming.com/murach_files/murach_files/exercises/11-1/index.php class="linkcolor main_336" Exercise 11-1></a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>-->
       <p class=""><a href=http://teamfluiditygaming.com/murach_files/murach_files/exercises/13-1/index.php class="linkcolor main_336" >Exercise 13-1</a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>
       <p class=""><a href=http://teamfluiditygaming.com/murach_files/murach_files/exercises/12-2/index.php class="linkcolor main_336">Exercise 12-2</a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>
       <p class=""><a href=http://teamfluiditygaming.com/murach_files/murach_files/exercises/15-1/index.php class="linkcolor main_336">Exercise 15-1</a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>
    </div>
    <div class="col-md-6 enhance">
       <h1 class="h1threethirtysix">Enhancements</h1>
       <p class=""><a href="http://teamfluiditygaming.com/murach_files/murach_files/enhancements/2-1/2-1.html" class="linkcolor main_336">Enhancement 2-1</a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>
       <p><a href="http://teamfluiditygaming.com/murach_files/murach_files/enhancements/4-1/index.php" class="linkcolor main_336">Enhancement 4-1</a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>
       <p class=""><a href=http://teamfluiditygaming.com/murach_files/murach_files/enhancements/5-1/index.php class="linkcolor main_336">Enhancement 5-1</a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>
       <p class=""><a href=../murach_files/murach_files/enhancements/7-2/index.php class="linkcolor main_336">Enhancement 7-2</a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>
       <!--<p class=""><a href=http://teamfluiditygaming.com/murach_files/murach_files/enhancements/11-1/index.php class="linkcolor main_336">Enhancement 11-1</a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>-->
       <p class=""><a href=http://teamfluiditygaming.com/murach_files/murach_files/enhancements/13-1/index.php class="linkcolor main_336">Enhancement 13-1</a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p> 
       <p class=""><a href=http://teamfluiditygaming.com/murach_files/murach_files/enhancements/12-2/index.php class="linkcolor main_336">Enhancement 12-2</a><img src="/images/checkmark.png" class="checkmark" alt="checkmark"></p>     
</div>
</div>
        <?php include 'footer.php'?>
        
    </div>
</body>
</html>