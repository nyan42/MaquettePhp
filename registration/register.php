<?php include('server.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>E-boutique</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styleRegister.css">


	<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
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
											<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a>
											</li>
											<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
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
									<li><a href="#">home</a></li>
									<li><a href="categories.php">shop</a></li>
									<li><a href="categories.php">promotion</a></li>
									<li><a href="#">pages</a></li>
									<li><a href="#">blog</a></li>
									<li><a href="contact.php">contact</a></li>
								</ul>
								<ul class="navbar_user">
									<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									<li><a href="registration/login.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
									<li class="checkout">

										<a id="panierIcon" class="btn btn-lg btn-danger popover-dismiss" type="button" data-toggle="collapse in" title="Voici votre panier" data-placement="bottom" data-html="true">

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
							<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
							<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
						</ul>
					</li>
					<li class="menu_item"><a href="#">home</a></li>
					<li class="menu_item"><a href="categories.php">shop</a></li>
					<li class="menu_item"><a href="categories.php">promotion</a></li>
					<li class="menu_item"><a href="#">pages</a></li>
					<li class="menu_item"><a href="#">blog</a></li>
					<li class="menu_item"><a href="contact.php">contact</a></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="row align-items-center">

				<div class="connexion">
					<form method="post" action="register.php">
						<?php include('errors.php'); ?>

						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="Username">Username</label>
								<input type="text" name="username" class="form-control" id="Username" value="<?php echo $username; ?>">
							</div>
							<div class="form-group col-md-6">
								<label for="inputmail">Email</label>
								<input type="email" class="form-control" id="mail" name="email" value="<?php echo $email; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword4">Password</label>
							<input type="password" class="form-control" id="inputPassword4" name="password_1">
						</div>
						<div class="form-group">
							<label for="inputPassword4">Confirm Password</label>
							<input type="password" class="form-control" id="inputPassword4" name="password_2">
						</div>

						
						<div class="input-group">
							<button type="submit" class="btn" name="reg_user">Register</button>
						</div>
						<p>
							Already a member? <a href="login.php">Sign in</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>