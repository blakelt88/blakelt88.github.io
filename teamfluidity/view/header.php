<nav class="navbar navbar-inverse navbar-fixed-top responsive-nav">
<div class="container sidebar-boss">
    <a href="#" class="menu-toggle glyphicon glyphicon-align-justify sidebar-anchor"></a>
</div>
</nav>
<nav class="navbar navbar-inverse navbar-fixed-top entire-header">
  <div class="container">
    <ul class="nav navbar-nav header-ul">
        <li style="border-right:1px solid #333;"><a href="../index.php"><span class="nav-font-color">Home</span></a></li>
        <li style="border-right:1px solid #333;"><a href="/view/tryout_main.php"><span class="nav-font-color">Tryout</span></a></li>
      <li style="border-right:1px solid #333;"><a href="/view/forum_main.php"><span class="nav-font-color">Forum</span></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="box-color"><a href="/view/registration_main.php"><span class="nav-register-font-color">Register</span></a></li>
		<?php 
			if (!isset($_SESSION['uid'])) {
			echo "<li><a href='/view/login_main.php'><span class='nav-font-color'>Login</span></a>
            </li>";
			}else{
				echo "<li><a href='/view/logout.php'><span class='nav-font-color'>Logout</span></a>
            </li>";
			}
			?>
    </ul>
  </div>
</nav>
<div class="col-md-8"></div>
<div class="col-md-4 welcome-user">
<?php 
			if (!isset($_SESSION['uid'])) {
			echo "";
			}else{
				echo "<h3>Welcome " .$_SESSION['username']. "!</h3>";
			}
			?>
			</div>
<div class="row logo">
    <div class="col-lg-12"><img class="img-responsive" src="/images/logo.png" alt="tfg logo"/></div>
</div>
