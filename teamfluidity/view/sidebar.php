<div class="sidebar">
        <nav>
    <ul class="nav navbar-nav sidebar-ul stop-white">
        <li class="box-color sidebar-remember-li"><a href="../view/registration_main.php" class="register-color"><span class="nav-register-font-color">Register</span></a></li>
		<?php 
			if (!isset($_SESSION['uid'])) {
			echo "<li class='dropdown sidebar-li weird-sidebar-li'><a href='/view/login_main.php' class='nav-font-color'><span>Login</span></a>
            </li>";
			}else{
				echo "<li class='dropdown sidebar-li weird-sidebar-li'><a href='/view/logout.php' class='nav-font-color'><span>Logout</span></a>
            </li>";
			}
			?>
        <li class="sidebar-li"><a href="../../index.php" class="nav-font-color"><span>Home</span></a></li>
        <li class="sidebar-li"><a href="../view/tryout.php" class="nav-font-color"><span>Tryout</span></a></li>
      <li class="sidebar-li"><a href="../view/forum_main.php" class="nav-font-color"><span>Forum</span></a></li>
        
      <li class="sidebar-li"><a href="../view/336.php" class="nav-font-color"><span>CIT 336</span></a></li>
        <li class="sidebar-li"><a href="../view/about_main.php" class="nav-font-color"><span>About Us</span></a></li>
        <li class="sidebar-li"><a href="../view/contact_main.php" class="nav-font-color"><span>Contact Us</span></a></li>
            </ul>
        </nav>
            </div>
			
			