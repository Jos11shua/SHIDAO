<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Listeo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main-color.css" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
				<a href="<?php echo e(route('home')); ?>"><img src="images/DJONDOZY.jpg" alt=""></a>
				</div>
				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">
								<li><a href="<?php echo e(route('home')); ?>">Home</a></li>
						<li><a href="<?php echo e(route('listing')); ?> ">listing</a>
							
						</li>

						<li><a href="# ">User Panel</a>
							<ul>
								<li><a href="<?php echo e(route('dashbord')); ?> ">Dashboard</a></li>
								<li><a href="<?php echo e(route('message')); ?>">Messages</a></li>
								<li><a href="<?php echo e(route('reservation')); ?>">Bookings</a></li>
								<li><a href="<?php echo e(route('annonces')); ?>">My Listings</a></li>
								<li><a href="<?php echo e(route('commentaire')); ?>">Reviews</a></li>
								<li><a href="<?php echo e(route('signet')); ?>">Bookmarks</a></li>
								<li><a href="<?php echo e(route('add_annonces')); ?>">Add Listing</a></li>
								<li><a href="<?php echo e(route('profil')); ?>">My Profile</a></li>
							</ul>
						</li>

						<li><a href="#">Pages</a>
							<div class="mega-menu mobile-styles three-columns">

									<div class="mega-menu-section">
										<ul>
											<li class="mega-menu-headline">Pages</li>
											<li><a href="<?php echo e(route('user_profil')); ?>"><i class="sl sl-icon-user"></i> User Profile</a></li>
											<li><a href="<?php echo e(route('booking')); ?>"><i class="sl sl-icon-check"></i> Booking Page</a></li>
											<li><a href="<?php echo e(route('add_annonces2')); ?>"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
											<li><a href="<?php echo e(route('blog')); ?>"><i class="sl sl-icon-docs"></i> Blog</a></li>
										</ul>
									</div>

							</div>
						</li>
						
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="images/dashboard-avatar.jpg" alt=""></span>Hi, Tom!</div>
						<ul>
							<li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
							<li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
							<li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
							<li><a href="index.html"><i class="sl sl-icon-power"></i> Logout</a></li>
						</ul>
					</div>

					<a href="<?php echo e(route('dashbord_add')); ?>" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>

<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>
	
	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Main">
				<li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<li class="active"><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages <span class="nav-tag messages">2</span></a></li>
				<li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
				<li><a href="dashboard-wallet.html"><i class="sl sl-icon-wallet"></i> Wallet</a></li>
			</ul>
			
			<ul data-submenu-title="Listings">
				<li><a><i class="sl sl-icon-layers"></i> My Listings</a>
					<ul>
						<li><a href="dashboard-my-listings.html">Active <span class="nav-tag green">6</span></a></li>
						<li><a href="dashboard-my-listings.html">Pending <span class="nav-tag yellow">1</span></a></li>
						<li><a href="dashboard-my-listings.html">Expired <span class="nav-tag red">2</span></a></li>
					</ul>	
				</li>
				<li><a href="dashboard-reviews.html"><i class="sl sl-icon-star"></i> Reviews</a></li>
				<li><a href="dashboard-bookmarks.html"><i class="sl sl-icon-heart"></i> Bookmarks</a></li>
				<li><a href="dashboard-add-listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
			</ul>	

			<ul data-submenu-title="Account">
				<li><a href="dashboard-my-profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
				<li><a href="index.html"><i class="sl sl-icon-power"></i> Logout</a></li>
			</ul>

		</div>
	</div>
	<!-- Navigation / End -->
	<!-- Content
	================================================= -->
    <?php echo $__env->yieldContent('content'); ?>


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="scripts/jquery-migrate-3.3.2.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>


</body>
</html><?php /**PATH C:\Users\Hp EliteBook 840G2\Documents\Nouveau dossier (2)\SHIDAO\resources\views/layout/app1.blade.php ENDPATH**/ ?>