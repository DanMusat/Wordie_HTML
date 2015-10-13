<?php include('includes/head.php'); ?>
<?php //include('includes/header.php'); ?>
<?php include('includes/navigation.php'); ?>
<?php //include('includes/navigation-full.php'); ?>

<div class="page page-about" itemprop="AboutPage">
	<!-- Content -->
	<section class="content">
		<!-- PostList -->
		<div class="postlist postlist-details">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
						<!-- Post -->
						<article class="post-details post-details-single" itemscope itemtype="http://schema.org/Article">
							<h1 class="post-title" itemprop="name">About Me</h1>
							<div class="post-subtitle">Hi! My name is Abby Thomas. <br/>Welcome to my blog.</div>

							<div class="post-author medium">
								<div class="author-avatar">
									<img src="images/temp/avatar-2.jpg" alt=""/><!--Image 166x166-->
								</div>
							</div>

							<div class="post-content" itemprop="articleBody">
								<p class="first-letter">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. <a href="#">Morbi accumsan ipsum velit</a>. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>

								<div class="post-media">
									<img src="images/temp/post-details-14.jpg" alt=""/><!--Image 930x520-->
								</div>

								<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a <a href="#">ornare</a> odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per <a href="#">conubia nostra </a>per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat <a href="#">sed fermentum </a>feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
							</div>

							<!-- Social Share Buttons-->
							<div class="social-share">
								<button class="share-toggle-button">
									<img class="share-icon" src="images/share.png" alt=""/>
								</button>
								<ul class="share-items">
									<li class="share-item">
										<a href="#" class="share-button">
											<i class="share-icon fa fa-facebook"></i>
										</a>
									</li>
									<li class="share-item">
										<a href="#" class="share-button">
											<i class="share-icon fa fa-twitter"></i>
										</a>
									</li>
									<li class="share-item">
										<a href="#" class="share-button">
											<i class="share-icon fa fa-instagram"></i>
										</a>
									</li>
									<li class="share-item">
										<a href="#" class="share-button">
											<i class="share-icon fa fa-pinterest"></i>
										</a>
									</li>
									<li class="share-item">
										<a href="#" class="share-button">
											<i class="share-icon fa fa-vimeo-square"></i>
										</a>
									</li>
									<li class="share-item">
										<a href="#" class="share-button">
											<i class="share-icon fa fa-google-plus"></i>
										</a>
									</li>
								</ul>
							</div>
							<!--/ Social Share Buttons-->
						</article>
						<!--/ Post -->
					</div>
				</div>
			</div>
		</div>
		<!--/ PostList -->
	</section>
	<!--/ Content -->
</div>

<!-- Widget Subscribe -->
<div class="widget-subscribe">
	<h2 class="title">Get Exclusive Content</h2>
	<div class="subtitle">Send us your email address and we’ll send you great content!</div>

	<form action="#" class="subscribe-form">
		<input type="email" name="subscribe-email" class="form-control" placeholder="enter your email address" />
		<input type="submit" name="subscribe-submit" value="Subscribe" class="btn btn-large" />
	</form>
</div>
<!--/ Widget Subscribe -->

<?php include('includes/footer2.php'); ?>
