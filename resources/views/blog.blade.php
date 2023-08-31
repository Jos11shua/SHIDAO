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

				<h2>Blog</h2><span>Latest News</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Blog</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">

	<!-- Blog Posts -->
	<div class="blog-page">
	<div class="row">


		<!-- Post Content -->
		<div class="col-lg-9 col-md-8 padding-right-30">


			<!-- Blog Post -->
			<div class="blog-post single-post">
				
				<!-- Img -->
				<img class="post-img" src="images/blog-post-02.jpg" alt="">

				
				<!-- Content -->
				<div class="post-content">

					<h3>The 50 Greatest Street Arts In London</h3>

					<ul class="post-meta">
						<li>August 22, 2019</li>
						<li><a href="#">Tips</a></li>
						<li><a href="#">5 Comments</a></li>
					</ul>

					<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>

					<div class="post-quote">
						<span class="icon"></span>
						<blockquote>
							Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.
						</blockquote>
					</div>

					<p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>
					<p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>


					<!-- Share Buttons -->
					<ul class="share-buttons margin-top-40 margin-bottom-0">
						<li><a class="fb-share" href="#"><i class="fa fa-facebook"></i> Share</a></li>
						<li><a class="twitter-share" href="#"><i class="fa fa-twitter"></i> Tweet</a></li>
						<li><a class="gplus-share" href="#"><i class="fa fa-google-plus"></i> Share</a></li>
						<li><a class="pinterest-share" href="#"><i class="fa fa-pinterest-p"></i> Pin</a></li>
					</ul>
					<div class="clearfix"></div>

				</div>
			</div>
			<!-- Blog Post / End -->


			<!-- Post Navigation -->
			<ul id="posts-nav" class="margin-top-0 margin-bottom-45">
				<li class="next-post">
					<a href="#"><span>Next Post</span>
					The Best Cofee Shops In Sydney Neighborhoods</a>
				</li>
				<li class="prev-post">
					<a href="#"><span>Previous Post</span>
					Hotels for All Budgets</a>
				</li>
			</ul>


			<!-- About Author -->
			<div class="about-author">
				<img src="images/user-avatar.jpg" alt="" />
				<div class="about-description">
					<h4>Tom Perrin</h4>
					<a href="#">tom@example.com</a>
					<p>Nullam ultricies, velit ut varius molestie, ante metus condimentum nisi, dignissim facilisis turpis ex in libero. Sed porta ante tortor, a pulvinar mi facilisis nec. Proin finibus dolor ac convallis congue.</p>
				</div>
			</div>


			<!-- Related Posts -->
			<div class="clearfix"></div>
			<h4 class="headline margin-top-25">Related Posts</h4>
			<div class="row">

				<!-- Blog Post Item -->
				<div class="col-md-6">
					<a href="#" class="blog-compact-item-container">
						<div class="blog-compact-item">
							<img src="images/blog-compact-post-01.jpg" alt="">
							<span class="blog-item-tag">Tips</span>
							<div class="blog-compact-item-content">
								<ul class="blog-post-tags">
									<li>22 August 2019</li>
								</ul>
								<h3>Hotels for All Budgets</h3>
								<p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
							</div>
						</div>
					</a>
				</div>
				<!-- Blog post Item / End -->

				<!-- Blog Post Item -->
				<div class="col-md-6">
					<a href="#" class="blog-compact-item-container">
						<div class="blog-compact-item">
							<img src="images/blog-compact-post-03.jpg" alt="">
							<span class="blog-item-tag">Tips</span>
							<div class="blog-compact-item-content">
								<ul class="blog-post-tags">
									<li>10 August 2019</li>
								</ul>
								<h3>The Best Cofee Shops In Sydney Neighborhoods</h3>
								<p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
							</div>
						</div>
					</a>
				</div>
				<!-- Blog post Item / End -->

			</div>
			<!-- Related Posts / End -->


			<div class="margin-top-50"></div>

			<!-- Reviews -->
			<section class="comments">
			<h4 class="headline margin-bottom-35">Comments <span class="comments-amount">(5)</span></h4>

				<ul>
					<li>
						<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
						<div class="comment-content"><div class="arrow-comment"></div>
							<div class="comment-by">Kathy Brown<span class="date">22 August 2019</span>
								<a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
							</div>
							<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
						</div>

						<ul>
							<li>
								<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
								<div class="comment-content"><div class="arrow-comment"></div>
									<div class="comment-by">Tom Smith<span class="date">22 August 2019</span>
										<a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
									</div>
									<p>Rrhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque.</p>
								</div>
							</li>
							<li>
								<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
								<div class="comment-content"><div class="arrow-comment"></div>
									<div class="comment-by">Kathy Brown<span class="date">20 August 2019</span>
										<a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
									</div>
									<p>Nam posuere tristique sem, eu ultricies tortor.</p>
								</div>

								<ul>
									<li>
										<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
										<div class="comment-content"><div class="arrow-comment"></div>
											<div class="comment-by">John Doe<span class="date">18 August 2019</span>
												<a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
											</div>
											<p>Great template!</p>
										</div>
									</li>
								</ul>

							</li>
						</ul>

					</li>

					<li>
						<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
						<div class="comment-content"><div class="arrow-comment"></div>
							<div class="comment-by">John Doe<span class="date">18 August 2019</span>
								<a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
							</div>
							<p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
						</div>

					</li>
				 </ul>

			</section>
			<div class="clearfix"></div>


			<!-- Add Comment -->
			<div id="add-review" class="add-review-box">

				<!-- Add Review -->
				<h3 class="listing-desc-headline margin-bottom-35">Add Review</h3>
	
				<!-- Review Comment -->
				<form id="add-comment" class="add-comment">
					<fieldset>

						<div class="row">
							<div class="col-md-6">
								<label>Name:</label>
								<input type="text" value=""/>
							</div>
								
							<div class="col-md-6">
								<label>Email:</label>
								<input type="text" value=""/>
							</div>
						</div>

						<div>
							<label>Comment:</label>
							<textarea cols="40" rows="3"></textarea>
						</div>

					</fieldset>

					<button class="button">Submit Comment</button>
					<div class="clearfix"></div>
				</form>

			</div>
			<!-- Add Review Box / End -->

	</div>
	<!-- Content / End -->



	<!-- Widgets -->
	<div class="col-lg-3 col-md-4">
		<div class="sidebar right">

			<!-- Widget -->
			<div class="widget">
				<h3 class="margin-top-0 margin-bottom-25">Search Blog</h3>
				<div class="search-blog-input">
					<div class="input"><input class="search-field" type="text" placeholder="Type and hit enter" value=""/></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- Widget / End -->


			<!-- Widget -->
			<div class="widget margin-top-40">
				<h3>Got any questions?</h3>
				<div class="info-box margin-bottom-10">
					<p>Having any questions? Feel free to ask!</p>
					<a href="pages-contact.html" class="button fullwidth margin-top-20"><i class="fa fa-envelope-o"></i> Drop Us a Line</a>
				</div>
			</div>
			<!-- Widget / End -->


			<!-- Widget -->
			<div class="widget margin-top-40">

				<h3>Popular Posts</h3>
				<ul class="widget-tabs">

					<!-- Post #1 -->
					<li>
						<div class="widget-content">
								<div class="widget-thumb">
								<a href="pages-blog-post.html"><img src="images/blog-widget-03.jpg" alt=""></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="pages-blog-post.html">Hotels for All Budgets </a></h5>
								<span>October 26, 2016</span>
							</div>
							<div class="clearfix"></div>
						</div>
					</li>
					
					<!-- Post #2 -->
					<li>
						<div class="widget-content">
							<div class="widget-thumb">
								<a href="pages-blog-post.html"><img src="images/blog-widget-02.jpg" alt=""></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="pages-blog-post.html">The 50 Greatest Street Arts In London</a></h5>
								<span>November 9, 2016</span>
							</div>
							<div class="clearfix"></div>
						</div>
					</li>
					
					<!-- Post #3 -->
					<li>
						<div class="widget-content">
							<div class="widget-thumb">
								<a href="pages-blog-post.html"><img src="images/blog-widget-01.jpg" alt=""></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="pages-blog-post.html">The Best Cofee Shops In Sydney Neighborhoods</a></h5>
								<span>November 12, 2016</span>
							</div>
							<div class="clearfix"></div>
						</div>
					</li>

				</ul>

			</div>
			<!-- Widget / End-->


			<!-- Widget -->
			<div class="widget margin-top-40">
				<h3 class="margin-bottom-25">Social</h3>
				<ul class="social-icons rounded">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>

			</div>
			<!-- Widget / End-->

			<div class="clearfix"></div>
			<div class="margin-bottom-40"></div>
		</div>
	</div>
	</div>
	<!-- Sidebar / End -->


</div>
</div>



<!-- Footer
================================================== -->
<div id="footer" class="margin-top-15">
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

@endsection