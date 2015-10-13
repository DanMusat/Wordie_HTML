<?php include('includes/head.php'); ?>
<?php //include('includes/header.php'); ?>
<?php include('includes/navigation.php'); ?>
<?php //include('includes/navigation-full.php'); ?>

<div class="page page-contact" itemprop="ContactPage">
	<!-- Content -->
	<section class="content">
		<!-- Contact Image -->
		<div class="contact-image" style="background-image: url(images/temp/contact.jpg);"></div><!--Image 1920x710-->
		<!-- Contact Image -->

		<!-- PostList -->
		<div class="postlist postlist-details">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
						<!-- Post -->
						<article class="post-details post-details-single" itemscope itemtype="http://schema.org/Article">
							<h1 class="post-title" itemprop="name">Contact Me</h1>
							<div class="post-subtitle">Tell me what’s on your mind. <br/>I’d love to hear from you.</div>

							<div class="post-content" itemprop="articleBody">
								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
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

						<!-- Contact Form -->
						<form class="contact-form" action="#">
							<div class="row">
								<div class="col-sm-6">
									<input type="text" name="contact-first-name" class="form-control" placeholder="First Name*" required />
									<input type="text" name="contact-last-name" class="form-control" placeholder="Last Name*" required />
									<input type="email" name="contact-email" class="form-control" placeholder="Email*" required />
									<input type="url" name="contact-url" class="form-control" placeholder="Website" />
								</div>

								<div class="col-sm-6">
									<textarea class="form-control" name="contact-message" placeholder="Message"></textarea>
								</div>

								<div class="col-sm-12 text-right">
									<input type="submit" name="contact-submit" value="Submit" class="btn btn-large"/>
								</div>
							</div>
						</form>
						<!--/ Contact Form -->
					</div>
				</div>
			</div>
		</div>
		<!--/ PostList -->
	</section>
	<!--/ Content -->
</div>

<?php include('includes/footer.php'); ?>
