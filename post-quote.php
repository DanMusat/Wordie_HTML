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
						<div class="postlist-author-badge">
							<!-- Post -->
							<article class="post-details post-details-single" itemscope itemtype="http://schema.org/Article">
								<div class="post-meta clearfix">
									<span class="post-tags underlined"><a href="#" itemprop="keywords">Category or Tag</a></span>
									<a href="#" class="post-likes">Likes <span>(218)</span></a>
									<a href="#" class="post-comments">Comments <span itemprop="commentCount">(0)</span></a>
								</div>

								<h1 class="post-title text-left" itemprop="name">This is a Quote Post with Author Badge</h1>

								<div class="post-author small">
									<div class="author-avatar">
										<a href="#"><img src="images/temp/avatar-2.jpg" alt=""/><!--Image 166x166--></a>
									</div>

									<div class="author-name"><a href="#">Abby Thomas</a></div>
									<div class="author-date"><span>May</span><strong>21</strong></div>
								</div>

								<div class="post-media">
									<div class="post-image quote small">
										<a href="#">
											<blockquote itemprop="citation">This is an example of a Quote Post. Duis sed odio sit amet nibh vulputate cursus sit amet mauris accumsan.</blockquote>
											<img src="images/temp/post-details-5.jpg" alt=""/><!--Image 930x540-->
											<i class="fa">“</i>
										</a>
									</div>
								</div>

								<div class="post-content" itemprop="articleBody">
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. <a href="#">Morbi accumsan ipsum velit</a>. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
									<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a <a href="#">ornare</a> odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat <a href="#">sed fermentum</a> feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.</p>
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
						</div>
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
