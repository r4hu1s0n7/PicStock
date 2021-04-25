<!DOCTYPE html>

<head>
	<?php include 'headtag.php'; ?>
	<script type="text/javascript">
		$(document).ready(function() {
			 <?php $_SESSION['page_name'] = "index"; ?>
			});
	</script>
</head>
<body>
<div class="theme-layout">
	<header>
		<div class="container">
			<div class="header-container">
				<nav>
					<ul>
						<li><a href="index-2.html" title="">Home</a></li>
						<li><a href="#" title="">Images</a>
							<ul>
								<li><a href="images-list.html" title="">Images List</a></li>
								<li><a href="images-list-sidebar.html" title="">Images List With Sidebar</a></li>
								<li><a href="single-page.html" title="">Single Image Page 1</a></li>
								<li><a href="single-page2.html" title="">Single Image Page 2</a></li>
								<li><a href="download-history.html" title="">Download History</a></li>
								<li><a href="freedownloads.html" title="">Free Downloads</a></li>
							</ul>
						</li>
						<li><a href="#" title="">Cart</a>
							<ul>
								<li><a href="cart.html" title="">Cart</a></li>
								<li><a href="checkout.html" title="">Checkout</a></li>
								<li><a href="wishlist.html" title="">Wishlist</a></li>
							</ul>
						</li>
						<li><a href="#" title="">More Pages</a>
							<ul>
								<li><a href="#" title="">Blog</a>
									<ul>
										<li><a href="blog.html" title="">Blog List</a></li>
										<li><a href="blog-single.html" title="">Blog Single</a></li>
										<li><a href="blog-single-sidebar.html" title="">Blog Single With Sidebar</a></li>
									</ul>
								</li>
								<li><a href="affiliations.html" title="">Affiliations</a></li>
								<li><a href="account-detail.html" title="">Account Details</a></li>
								<li><a href="price-package.html" title="">Price Package</a></li>
							</ul>
						</li>
					</ul>
				</nav><!-- Navigation -->
				<div class="header-links">
					<ul>
						<li><a class="call-reg login-popup" href="#" title="">Log in</a></li>
						<li><a class="call-reg signup-popup" href="#" title="">Sign up</a></li>
						<li><a href="cart.html" title="">Cart (0)</a></li>
						<li>
							<div class="lang-selector">
								<span><img src="images/language1.png" alt="" /> English</span>
								<ul>
									<li><span><img src="images/language1.png" alt="" /> English</span></li>
									<li><span><img src="images/language2.png" alt="" /> Español</span></li>
									<li><span><img src="images/language3.png" alt="" /> Français</span></li>
									<li><span><img src="images/language4.png" alt="" /> Norsk</span></li>
								</ul>
							</div>
						</li>
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
				<li><a href="index-2.html" title="">Home</a></li>
				<li class="menu-item-has-children"><a href="#" title="">Images</a>
					<ul>
						<li><a href="images-list.html" title="">Images List</a></li>
						<li><a href="images-list-sidebar.html" title="">Images List With Sidebar</a></li>
						<li><a href="single-page.html" title="">Single Image Page 1</a></li>
						<li><a href="single-page2.html" title="">Single Image Page 2</a></li>
						<li><a href="download-history.html" title="">Download History</a></li>
						<li><a href="freedownloads.html" title="">Free Downloads</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a href="#" title="">Cart</a>
					<ul>
						<li><a href="cart.html" title="">Cart</a></li>
						<li><a href="checkout.html" title="">Checkout</a></li>
						<li><a href="wishlist.html" title="">Wishlist</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a href="#" title="">More Pages</a>
					<ul>
						<li class="menu-item-has-children"><a href="#" title="">Blog</a>
							<ul>
								<li><a href="blog.html" title="">Blog List</a></li>
								<li><a href="blog-single.html" title="">Blog Single</a></li>
								<li><a href="blog-single-sidebar.html" title="">Blog Single With Sidebar</a></li>
							</ul>
						</li>
						<li><a href="affiliations.html" title="">Affiliations</a></li>
						<li><a href="account-detail.html" title="">Account Details</a></li>
						<li><a href="price-package.html" title="">Price Package</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="responsive-links other">
			<ul>
				<li><a href="#" title=""><i class="fa fa-shopping-cart"></i>Cart (0)</a></li>
				<li><a class="call-reg login-popup" href="#" title="">Log in</a></li>
				<li><a class="call-reg signup-popup" href="#" title="">Sign up</a></li>
				<li class="menu-item-has-children">
					<div class="lang-selector">
						<span><img src="images/language1.png" alt="" /> English</span>
						<ul>
							<li><span><img src="images/language1.png" alt="" /> English</span></li>
							<li><span><img src="images/language2.png" alt="" /> Español</span></li>
							<li><span><img src="images/language3.png" alt="" /> Français</span></li>
							<li><span><img src="images/language4.png" alt="" /> Norsk</span></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div><!-- Responsive Header -->



	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-12 column">
						<div class="blog-post">
							<div class="simple-post">
								<div class="post-img"><img src="images/resource/simple-post1.jpg" alt="" /></div>
								<div class="post-detail">
									<h3><a href="blog-single.html" title="">An Affiliation is an Official into Connection to Something.</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
									<a href="blog-single.html" title="">Read More</a>
								</div>
							</div><!-- Simple Post -->
							<div class="simple-post reverse">
								<div class="post-detail">
									<h3><a href="blog-single.html" title="">What is the stock Affiliation Program?</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
									<a href="blog-single.html" title="">Read More</a>
								</div>
								<div class="post-img"><img src="images/resource/simple-post2.jpg" alt="" /></div>
							</div><!-- Simple Post -->
							<div class="simple-post">
								<div class="post-img"><img src="images/resource/simple-post3.jpg" alt="" /></div>
								<div class="post-detail">
									<h3><a href="blog-single.html" title="">An Affiliation is an Official into Connection to Something.</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
									<a href="blog-single.html" title="">Read More</a>
								</div>
							</div><!-- Simple Post -->
							<div class="simple-post reverse">
								<div class="post-detail">
									<h3><a href="blog-single.html" title="">What is the stock Affiliation Program?</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
									<a href="blog-single.html" title="">Read More</a>
								</div>
								<div class="post-img"><img src="images/resource/simple-post4.jpg" alt="" /></div>
							</div><!-- Simple Post -->
							<div class="simple-post">
								<div class="post-img"><img src="images/resource/simple-post5.jpg" alt="" /></div>
								<div class="post-detail">
									<h3><a href="blog-single.html" title="">An Affiliation is an Official into Connection to Something.</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
									<a href="blog-single.html" title="">Read More</a>
								</div>
							</div><!-- Simple Post -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

	<footer>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-2 column">
						<div class="widget">
							<h4 class="widget-title">picstock.com</h4>
							<ul>
								<li><a href="freedownloads.html" title="">Free Downloads</a></li>
								<li><a href="wishlist.html" title="">Wishlist</a></li>
								<li><a href="price-package.html" title="">Price Packages</a></li>
								<li><a href="affiliations.html" title="">Affiliations</a></li>
								<li><a href="download-history.html" title="">Download History</a></li>
							</ul>
						</div><!-- Widget -->
					</div>
					<div class="col-md-2 column">
						<div class="widget">
							<h4 class="widget-title">Who We Are</h4>
							<ul>
								<li><a href="affiliations.html" title="">Affiliations</a></li>
								<li><a href="blog.html" title="">Blog</a></li>
								<li><a href="blog-single.html" title="">Blog Single</a></li>
								<li><a href="blog-single-sidebar.html" title="">Blog Single W/S</a></li>
								<li><a href="freedownloads.html" title="">Free Downloads</a></li>
							</ul>
						</div><!-- Widget -->
					</div>
					<div class="col-md-2 column">
						<div class="widget">
							<h4 class="widget-title">Ways To Pay</h4>
							<ul>
								<li><a href="cart.html" title="">Cart</a></li>
								<li><a href="checkout.html" title="">Checkout</a></li>
								<li><a href="wishlist.html" title="">Wishlist</a></li>
								<li><a href="#" title="">Plans & Pricing</a></li>
								<li><a href="#" title="">Coorporate Accounts</a></li>
							</ul>
						</div><!-- Widget -->
					</div>
					<div class="col-md-3 column">
						<div class="widget">
							<h4 class="widget-title">Free Images</h4>
							<div class="images-widget">
								<a href="#" title=""><img src="images/resource/image-widget1.jpg" alt="" /></a>
								<a href="#" title=""><img src="images/resource/image-widget2.jpg" alt="" /></a>
								<a href="#" title=""><img src="images/resource/image-widget3.jpg" alt="" /></a>
								<a href="#" title=""><img src="images/resource/image-widget4.jpg" alt="" /></a>
								<a href="#" title=""><img src="images/resource/image-widget5.jpg" alt="" /></a>
								<a href="#" title=""><img src="images/resource/image-widget6.jpg" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 column">
						<div class="widget">
							<h4 class="widget-title">Follow Us</h4>
							<div class="social-widget">
								<p>Search for images anywhere using our award-winning iPad apps.</p>
								<ul>
									<li><a style="background:#0070cf;" href="#" title=""><i class="fa fa-facebook"></i></a></li>
									<li><a style="background:#be3100;" href="#" title=""><i class="fa fa-google-plus"></i></a></li>
									<li><a style="background:#d900a3;" href="#" title=""><i class="fa fa-flickr"></i></a></li>
									<li><a style="background:#e04c86;" href="#" title=""><i class="fa fa-dribbble"></i></a></li>
									<li><a style="background:#fe3400;" href="#" title=""><i class="fa fa-reddit"></i></a></li>
								</ul>
								<form>
									<input type="text" placeholder="Subscribe" />
									<button><i class="ti-arrow-right"></i></button>
								</form>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="bottom-footer">
		<div class="container"><p>© 2015-2016 Picstock, Inc. All rights reserved. Made By Webinane.</p></div>		
	</div>


	<div class="registration-popup">
		<div class="popup-overlay">
			<div class="popup-container">
				<div class="form-box signup-popup">
					<span class="close-popup"><i class="fa fa-remove"></i></span>
					<div class="title">
						<h2>Sign Up</h2>
						<i>You can select from the key</i>
					</div>
					<form class="registration-form">
						<div class="row">
							<div class="col-md-12"><div class="field"><i class="ti-user"></i><input type="text" placeholder="Name" /></div></div>
							<div class="col-md-12"><div class="field"><i class="ti-envelope"></i><input type="email" placeholder="Email Address" /></div></div>
							<div class="col-md-12"><div class="field"><i class="ti-key"></i><input type="password" placeholder="Password" /></div></div>
							<div class="col-md-12"><div class="field choice"><input type="checkbox" name="check" /><label>I agree to Shutterstock's Website Terms, Privacy Policy, Licensing Terms and to receive emails that I can opt out of at any time.</label></div></div>
							<div class="col-md-12"><div class="field field-button"><input type="submit" value="Create Account" /></div></div>
						</div>
					</form>
				</div><!-- Sing Up Form -->

				<div class="form-box login-popup">
					<span class="close-popup"><i class="fa fa-remove"></i></span>
					<div class="title">
						<h2>LOGIN</h2>
						<i>You can select from the key</i>
					</div>
					<form class="registration-form">
						<div class="row">
							<div class="col-md-12"><div class="field"><i class="ti-user"></i><input type="text" placeholder="Name" /></div></div>
							<div class="col-md-12"><div class="field"><i class="ti-envelope"></i><input type="email" placeholder="Email Address" /></div></div>
							<div class="col-md-12"><div class="field"><i class="ti-key"></i><input type="password" placeholder="Password" /></div></div>
							<div class="col-md-12"><div class="field choice"><input type="checkbox" name="check" /><label>I agree to Shutterstock's Website Terms, Privacy Policy, Licensing Terms and to receive emails that I can opt out of at any time.</label></div></div>
							<div class="col-md-12"><div class="field field-button"><input type="submit" value="Login" /></div></div>
						</div>
					</form>
				</div><!-- Login Form -->

			</div>
		</div>
	</div><!-- Registration Popup -->


	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/enscroll-0.5.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.scrolly.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>

</body>

<!-- Mirrored from html.webinane.com/picstock/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jan 2019 07:12:57 GMT -->
</html>