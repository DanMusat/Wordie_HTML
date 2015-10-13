<?php include('includes/head.php'); ?>
<?php //include('includes/header.php'); ?>
<?php include('includes/navigation.php'); ?>
<?php //include('includes/navigation-full.php'); ?>

<div class="page page-sidebar">
	<!-- Content -->
	<section class="content">
		<!-- PostList -->
		<div class="postlist postlist-details">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<!-- Post -->
						<article class="post-details post-details-single" itemscope itemtype="http://schema.org/Article">
							<div class="post-meta clearfix">
								<span class="post-tags underlined"><a href="#" itemprop="keywords">Category or Tag</a></span>
								<time class="post-date" datetime="2015-05-21T20:22:19" itemprop="dateCreated">May 21, 2015</time>
								<a href="#" class="post-comments">Comments <span itemprop="commentCount">(0)</span></a>
							</div>

							<h1 class="post-title" itemprop="name">Multiple Image Post with Author Badge</h1>

							<div class="post-author small">
								<div class="author-avatar">
									<a href="#"><img src="images/temp/avatar-2.jpg" alt=""/><!--Image 166x166--></a>
								</div>

								<div class="author-name"><a href="#" class="author-name">Abby Thomas</a></div>
							</div>

							<div class="post-content" itemprop="articleBody">
								<p class="first-letter">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. <a href="#">Morbi accumsan ipsum velit</a>. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>

								<div class="post-media">
									<img src="images/temp/post-details-1.jpg" alt="" itemprop="image"/><!--Image 930x520-->
								</div>

								<h4 class="question">This is an example of an article subcaption</h4>
								<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a <a href="#">ornare</a> odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat <a href="#">sed fermentum</a> feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.</p>

								<ul class="unordered-list">
									<li>Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos</li>
									<li>Mauris in erat justo nullam ac urna eu felis dapibus</li>
									<li>Condimentum sit amet a augue sed non neque imperdiet nisi</li>
									<li>Etiam pharetra erat sed fermentum feugiat velit mauris egestas quam ut aliquam massa nisl quis neque</li>
								</ul>

								<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat <a href="#">consequat auctor</a> eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. <a href="#">Proin condimentum</a> fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>

								<div class="post-media">
									<div class="row">
										<div class="col-xs-6">
											<img src="images/temp/post-details-12.jpg" alt=""/><!--Image 450x520-->
										</div>

										<div class="col-xs-6">
											<img src="images/temp/post-details-13.jpg" alt=""/><!--Image 450x520-->
										</div>
									</div>
								</div>
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

						<!-- Pagination -->
						<div class="pagination pagination-post clearfix">
							<a class="pull-left" href="#">
								<i class="fa fa-angle-left"></i>
								<span class="linkinfo">
									<span class="title underlined"><span>Prev Story</span></span>
									<span class="description">Title of Previous Article <br/>Will Go Here</span>
								</span>
							</a>

							<a class="pull-right" href="#">
								<i class="fa fa-angle-right"></i>
								<span class="linkinfo">
									<span class="title underlined"><span>Prev Story</span></span>
									<span class="description">Title of Next Article <br/>Will Go Here</span>
								</span>
							</a>

							<div class="hint">what will you read next?</div>
						</div>
						<!--/ Pagination -->

						<?php include('includes/comments.php'); ?>
						<?php include('includes/related-posts.php'); ?>
					</div>
				</div>
			</div>
		</div>
		<!--/ PostList -->
	</section>
	<!--/ Content -->

	<?php include('includes/sidebar.php'); ?>
</div>

<?php include('includes/footer.php'); ?>
