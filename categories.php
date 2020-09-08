<?php session_start();
include_once("test.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>E-boutique</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="styles/categories_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header trans_300">

			<!-- Top Navigation -->

			<div class="top_nav">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="top_nav_left">free shipping on all u.s orders over $50</div>
						</div>
						<div class="col-md-6 text-right">
							<div class="top_nav_right">
								<ul class="top_nav_menu">

									<!-- Currency / Language / My Account -->

									<li class="currency">
										<a href="#">
											usd
											<i class="fa fa-angle-down"></i>
										</a>
										<ul class="currency_selection">
											<li><a href="#">cad</a></li>
											<li><a href="#">aud</a></li>
											<li><a href="#">eur</a></li>
											<li><a href="#">gbp</a></li>
										</ul>
									</li>
									<li class="language">
										<a href="#">
											English
											<i class="fa fa-angle-down"></i>
										</a>
										<ul class="language_selection">
											<li><a href="#">French</a></li>
											<li><a href="#">Italian</a></li>
											<li><a href="#">German</a></li>
											<li><a href="#">Spanish</a></li>
										</ul>
									</li>
									<li class="account">
										<a href="#">
											My Account
											<i class="fa fa-angle-down"></i>
										</a>
										<ul class="account_selection">
											<li><a href="registration/login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a>
											</li>
											<li><a href="registration/register.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Navigation -->

			<div class="main_nav_container">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-right">
							<div class="logo_container">
								<a href="index.php">php<span>shop</span></a>
							</div>
							<nav class="navbar">
								<ul class="navbar_menu">
									<li><a href="index.php">home</a></li>
									<li><a href="categories.php">shop</a></li>
									<li><a href="categories.php">promotion</a></li>
									<li><a href="#">pages</a></li>
									<li><a href="#">blog</a></li>
									<li><a href="contact.php">contact</a></li>
								</ul>
								<ul class="navbar_user">
									<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
									<li class="checkout">
										<a href="#">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
											<span id="checkout_items" class="checkout_items">2</span>
										</a>
									</li>
								</ul>
								<div class="hamburger_container">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>

		</header>

		<div class="fs_menu_overlay"></div>

		<!-- Hamburger Menu -->

		<div class="hamburger_menu">
			<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<div class="hamburger_menu_content text-right">
				<ul class="menu_top_nav">
					<li class="menu_item has-children">
						<a href="#">
							usd
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="#">cad</a></li>
							<li><a href="#">aud</a></li>
							<li><a href="#">eur</a></li>
							<li><a href="#">gbp</a></li>
						</ul>
					</li>
					<li class="menu_item has-children">
						<a href="#">
							English
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="#">French</a></li>
							<li><a href="#">Italian</a></li>
							<li><a href="#">German</a></li>
							<li><a href="#">Spanish</a></li>
						</ul>
					</li>
					<li class="menu_item has-children">
						<a href="#">
							My Account
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="registration/login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a>
							</li>
							<li><a href="registration/register.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
							</li>
						</ul>
					</li>
					<li class="menu_item"><a href="#">home</a></li>
					<li class="menu_item"><a href="#">shop</a></li>
					<li class="menu_item"><a href="#">promotion</a></li>
					<li class="menu_item"><a href="#">pages</a></li>
					<li class="menu_item"><a href="#">blog</a></li>
					<li class="menu_item"><a href="#">contact</a></li>
				</ul>
			</div>
		</div>

		<div class="container product_section_container">
			<div class="row">
				<div class="col product_section clearfix">

					<!-- Breadcrumbs -->

					<div class="breadcrumbs d-flex flex-row align-items-center">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li class="active"><a href="index.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's</a></li>
						</ul>
					</div>

					<!-- Sidebar -->

					<div class="sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">
								<h5>Product Category</h5>
							</div>
							<ul class="sidebar_categories">
								<li><a href="#">Men</a></li>
								<li class="active"><button><span><i class="fa fa-angle-double-right grid_sorting_button" data-filter=".women" aria-hidden="true"></i></span>Women</button></li>

								<li><a href="#">Accessories</a></li>
								<li><a href="#">New Arrivals</a></li>
								<li><a href="#">Collection</a></li>
								<li><a href="#">Shop</a></li>
							</ul>
						</div>

						<!-- Price Range Filtering -->
						<div class="sidebar_section">
							<div class="sidebar_title">
								<h5>Filter by Price</h5>
							</div>
							<p>
								<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
							</p>
							<div id="slider-range"></div>
							<div class="filter_button"><span>filter</span></div>
						</div>

						<!-- Sizes -->
						<div class="sidebar_section">
							<div class="sidebar_title">
								<h5>Sizes</h5>
							</div>
							<ul class="checkboxes">
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>S</span></li>
								<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>M</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>L</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XL</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XXL</span></li>
							</ul>
						</div>

						<!-- Color -->
						<div class="sidebar_section">
							<div class="sidebar_title">
								<h5>Color</h5>
							</div>
							<ul class="checkboxes">
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Black</span></li>
								<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>Pink</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>
							</ul>
							<div class="show_more">
								<span><span>+</span>Show More</span>
							</div>
						</div>

					</div>

					<!-- Main Content -->

					<div class="main_content">

						<!-- Products -->

						<div class="products_iso">
							<div class="row">
								<div class="col">

									<!-- Product Sorting -->

									<div class="product_sorting_container product_sorting_container_top">
										<ul class="product_sorting">
											<li>
												<span class="type_sorting_text">Default Sorting</span>
												<i class="fa fa-angle-down"></i>
												<ul class="sorting_type">
													<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>
														<span>Default Sorting</span></li>
													<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span>
													</li>
													<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Product
															Name</span></li>
												</ul>
											</li>
											<li>
												<span>Show</span>
												<span class="num_sorting_text">6</span>
												<i class="fa fa-angle-down"></i>
												<ul class="sorting_num">
													<li class="num_sorting_btn"><span>6</span></li>
													<li class="num_sorting_btn"><span>12</span></li>
													<li class="num_sorting_btn"><span>24</span></li>
												</ul>
											</li>
										</ul>
										<div class="pages d-flex flex-row align-items-center">
											<div class="page_current">
												<span>1</span>
												<ul class="page_selection">
													<li><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
												</ul>
											</div>
											<div class="page_total"><span>of</span> 3</div>
											<div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
										</div>

									</div>

									<!-- Product Grid -->

									<div class="product-grid">

										<?php ShowProduct("all"); ?>
									</div>

									<!-- Product Sorting -->

									<div class="product_sorting_container product_sorting_container_bottom clearfix">
										<ul class="product_sorting">
											<li>
												<span>Show:</span>
												<span class="num_sorting_text">04</span>
												<i class="fa fa-angle-down"></i>
												<ul class="sorting_num">
													<li class="num_sorting_btn"><span>01</span></li>
													<li class="num_sorting_btn"><span>02</span></li>
													<li class="num_sorting_btn"><span>03</span></li>
													<li class="num_sorting_btn"><span>04</span></li>
												</ul>
											</li>
										</ul>
										<span class="showing_results">Showing 1–3 of 12 results</span>
										<div class="pages d-flex flex-row align-items-center">
											<div class="page_current">
												<span>1</span>
												<ul class="page_selection">
													<li><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
												</ul>
											</div>
											<div class="page_total"><span>of</span> 3</div>
											<div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
										</div>

									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Benefit -->

		<div class="benefit">
			<div class="container">
				<div class="row benefit_row">
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>free shipping</h6>
								<p>Suffered Alteration in Some Form</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>cach on delivery</h6>
								<p>The Internet Tend To Repeat</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>45 days return</h6>
								<p>Making it Look Like Readable</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>opening all week</h6>
								<p>8AM - 09PM</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Newsletter -->

		<div class="newsletter">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
							<h4>Newsletter</h4>
							<p>Subscribe to our newsletter and get 20% off your first purchase</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
							<ul class="footer_nav">
								<li><a href="#">Blog</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="contact.php">Contact us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="footer_nav_container">
							<div class="cr"></div>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
	<script src="js/categories_custom.js"></script>
</body>

</html>