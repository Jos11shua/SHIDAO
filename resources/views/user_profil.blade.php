@extends('layout.app2')
@section('content')


<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="user-profile-titlebar">
					<div class="user-profile-avatar"><img src="images/user-profile-avatar.jpg" alt=""></div>
					<div class="user-profile-name">
						<h2>Tom Perrin</h2>
						<div class="star-rating" data-rating="5">
							<div class="rating-counter"><a href="#listing-reviews">(60 reviews)</a></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>



<!-- Content
================================================== -->
<div class="container">
	<div class="row sticky-wrapper">


		<!-- Sidebar
		================================================== -->
		<div class="col-lg-4 col-md-4 margin-top-0">
				
			<!-- Verified Badge -->
			<div class="verified-badge with-tip" data-tip-content="Account has been verified and belongs to the person or organization represented.">
				<i class="sl sl-icon-user-following"></i> Verified Account
			</div>

			<!-- Contact -->
			<div class="boxed-widget margin-top-30 margin-bottom-50">
				<h3>Contact</h3>
				<ul class="listing-details-sidebar">
					<li><i class="sl sl-icon-phone"></i> (123) 123-456</li>
					<li><i class="fa fa-envelope-o"></i> <a href="#">tom@example.com</a></li>
				</ul>

				<ul class="listing-details-sidebar social-profiles">
					<li><a href="#" class="facebook-profile"><i class="fa fa-facebook-square"></i> Facebook</a></li>
					<li><a href="#" class="twitter-profile"><i class="fa fa-twitter"></i> Twitter</a></li>
					<!-- <li><a href="#" class="gplus-profile"><i class="fa fa-google-plus"></i> Google Plus</a></li> -->
				</ul>

				<!-- Reply to review popup -->
				<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
					<div class="small-dialog-header">
						<h3>Send Message</h3>
					</div>
					<div class="message-reply margin-top-0">
						<textarea cols="40" rows="3" placeholder="Your message to Tom"></textarea>
						<button class="button">Send Message</button>
					</div>
				</div>

				<a href="#small-dialog" class="send-message-to-owner button popup-with-zoom-anim"><i class="sl sl-icon-envelope-open"></i> Send Message</a>
			</div>
			<!-- Contact / End-->

		</div>
		<!-- Sidebar / End -->


		<!-- Content
		================================================== -->
		<div class="col-lg-8 col-md-8 padding-left-30">

			<h3 class="margin-top-0 margin-bottom-40">Tom's Listings</h3>

			<!-- Listings Container -->
			<div class="row">

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">
							
							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/listing-item-01.jpg" alt="">
								<span class="tag">Eat & Drink</span>
							</div>
							
							<!-- Content -->
							<div class="listing-item-content">
								<div class="listing-badge now-open">Now Open</div>

								<div class="listing-item-inner">
									<h3>Tom's Restaurant</h3>
									<span>964 School Street, New York</span>
									<div class="star-rating" data-rating="3.5">
										<div class="rating-counter">(12 reviews)</div>
									</div>
								</div>

								<span class="like-icon"></span>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">
							
							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/listing-item-03.jpg" alt="">
								<span class="tag">Hotels</span>
							</div>
							
							<!-- Content -->
							<div class="listing-item-content">

								<div class="listing-item-inner">
								<h3>Hotel Govendor</h3>
								<span>778 Country Street, New York</span>
									<div class="star-rating" data-rating="2.0">
										<div class="rating-counter">(17 reviews)</div>
									</div>
								</div>

								<span class="like-icon"></span>

								<div class="listing-item-details">Starting from $59 per night</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">
							
							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/listing-item-04.jpg" alt="">
								<span class="tag">Eat & Drink</span>
							</div>
							
							<!-- Content -->
							<div class="listing-item-content">
								<div class="listing-badge now-open">Now Open</div>
								
								<div class="listing-item-inner">
								<h3>Burger House</h3>
								<span>2726 Shinn Street, New York</span>
									<div class="star-rating" data-rating="5.0">
										<div class="rating-counter">(31 reviews)</div>
									</div>
								</div>

								<span class="like-icon"></span>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<div class="col-md-12 browse-all-user-listings">
					<a href="#">Browse All Listings <i class="fa fa-angle-right"></i> </a>
				</div>

			</div>
			<!-- Listings Container / End -->

				
			<!-- Reviews -->
			<div id="listing-reviews" class="listing-section">
				<h3 class="margin-top-60 margin-bottom-20">Reviews</h3>

				<div class="clearfix"></div>

				<!-- Reviews -->
				<section class="comments listing-reviews">

					<ul>
						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">Kathy Brown <div class="comment-by-listing">on <a href="#">Burger House</a></div> <span class="date">June 2019</span>
									<div class="star-rating" data-rating="5"></div>
								</div>
								<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
								
								<div class="review-images mfp-gallery-container">
									<a href="images/review-image-01.jpg" class="mfp-gallery"><img src="images/review-image-01.jpg" alt=""></a>
								</div>
							</div>
						</li>

						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">John Doe <div class="comment-by-listing">on <a href="#">Tom's Restaurant</a></div> <span class="date">May 2019</span>
									<div class="star-rating" data-rating="4"></div>
								</div>
								<p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
							</div>
						</li>

						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">Kathy Brown <div class="comment-by-listing">on <a href="#">Burger House</a></div> <span class="date">June 2019</span>
									<div class="star-rating" data-rating="5"></div>
								</div>
								<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
								
								<div class="review-images mfp-gallery-container">
									<a href="images/review-image-02.jpg" class="mfp-gallery"><img src="images/review-image-02.jpg" alt=""></a>
									<a href="images/review-image-03.jpg" class="mfp-gallery"><img src="images/review-image-03.jpg" alt=""></a>
								</div>
							</div>
						</li>

						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">John Doe <div class="comment-by-listing">on <a href="#">Hotel Govendor</a></div> <span class="date">May 2019</span>
									<div class="star-rating" data-rating="5"></div>
								</div>
								<p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
							</div>

						</li>
					 </ul>
				</section>

				<!-- Pagination -->
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<!-- Pagination -->
						<div class="pagination-container margin-top-30">
							<nav class="pagination">
								<ul>
									<li><a href="#" class="current-page">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<!-- Pagination / End -->
			</div>


		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<div id="footer" class="margin-top-65">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="images/logo.png" alt="">
				<br><br>
				<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			</div>

			<div class="col-md-4 col-sm-6 ">
				<h4>Helpful Links</h4>
				<ul class="footer-links">
					<li><a href="#">Login</a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Add Listing</a></li>
					<li><a href="#">Pricing</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>

				<ul class="footer-links">
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Our Partners</a></li>
					<li><a href="#">How It Works</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>		

			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>12345 Little Lonsdale St, Melbourne</span> <br>
					Phone: <span>(123) 123-456 </span><br>
					E-Mail:<span> <a href="#">office@example.com</a> </span><br>
				</div>

				<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
				</ul>

			</div>

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2021 Listeo. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


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


<!-- Style Switcher
================================================== -->
<script src="scripts/switcher.js"></script>

<div id="style-switcher">
	<h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>
	
	<div>
		<ul class="colors" id="color1">
			<li><a href="#" class="main" title="Main"></a></li>
			<li><a href="#" class="blue" title="Blue"></a></li>
			<li><a href="#" class="green" title="Green"></a></li>
			<li><a href="#" class="orange" title="Orange"></a></li>
			<li><a href="#" class="navy" title="Navy"></a></li>
			<li><a href="#" class="yellow" title="Yellow"></a></li>
			<li><a href="#" class="peach" title="Peach"></a></li>
			<li><a href="#" class="beige" title="Beige"></a></li>
			<li><a href="#" class="purple" title="Purple"></a></li>
			<li><a href="#" class="celadon" title="Celadon"></a></li>
			<li><a href="#" class="red" title="Red"></a></li>
			<li><a href="#" class="brown" title="Brown"></a></li>
			<li><a href="#" class="cherry" title="Cherry"></a></li>
			<li><a href="#" class="cyan" title="Cyan"></a></li>
			<li><a href="#" class="gray" title="Gray"></a></li>
			<li><a href="#" class="olive" title="Olive"></a></li>
		</ul>
	</div>
		
</div>
<!-- Style Switcher / End -->


</body>
</html>
@endsection