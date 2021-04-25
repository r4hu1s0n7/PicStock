<?php
if(session_status() == PHP_SESSION_NONE)
{
	session_start();	
}
?>
<header>
		<div class="container">
			<div class="header-container">
				<nav>
					<ul>
						<li><a href="index.php" title="">Home</a></li>
						<li><a href="affiliations.php" title="">Affiliations</a></li>
						<li><a href="price-package.php" title="">Price Package</a></li>
					</ul>
				</nav><!-- Navigation -->
				<div class="header-links">
					<ul>
						<?php
							if (!isset($_SESSION['isLogin']))
							{
						?>
						<li><a href="login/login.php" title="">Log in</a></li>
						<li><a href="login/signup.php" title="">Sign up</a></li>
						<?php 
							}
							elseif(isset($_SESSION['isLogin']))
							{
						?>
						<li><?php if(!isset($_SESSION['temp'])) { ?><a href="account-detail.php" title="">Account Details</a><?php } else { ?><a href="test_image_upload.php" title="">Upload Image</a><?php } ?></li>
						<li><a href="login/logout.php" title="">Logout</a></li>
						<?php
							}
						?>
					</ul>
				</div><!-- Header Links -->
			</div>
		</div>
	</header><!-- Header -->
	
	<div class="responsive-header">
		<div class="responsive-bar">
			<span class="open-menu"><i data-target="menu" class="fa fa-align-center"></i></span>
			<div class="logo"><a href="#" title=""><img src="images/logo.png" alt="" /></a></div><!-- Logo -->
			<span class="open-links"><i data-target="links" class="fa fa-arrow-right"></i></span>
		</div>
		<div class="responsive-links menu">
			<ul>
				<li><a href="index.php" title="">Home</a></li>
				<li><a href="images-list.php" title="">Images</a></li>
				<li><a href="blog.php" title="">Blog</a></li>
				<li><a href="affiliations.php" title="">Affiliations</a></li>
				<li><a href="price-package.php" title="">Price Package</a></li>
			</ul>
		</div>

		<div class="responsive-links other">
			<ul>
				<?php
							if (!isset($_SESSION['isLogin']))
							{
						?>
						<li><a href="login/login.php" title="">Log in</a></li>
						<li><a href="login/signup.php" title="">Sign up</a></li>
						<?php 
							}
							elseif(!isset($_SESSION['isLogin']))
							{
						?>
						<li><i class="fa fa-user">&nbsp;</i><a href="account-detail.php" title="">Account Details</a></li>
						<li><i class="fa fa-sign-out">&nbsp;</i><a href="login/logout.php" title="">Logout</a></li>
						<?php
							}
						?>
			</ul>
		</div>
	</div><!-- Responsive Header -->